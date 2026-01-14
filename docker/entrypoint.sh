#!/bin/bash
# GMO Plus - Entrypoint Script for Docker Container
# This script handles dynamic configuration based on environment variables

set -e

echo "🚀 GMO Plus - Starting container initialization..."

# Create PHP error log directory
mkdir -p /var/log/php
chown www-data:www-data /var/log/php

# Function to update config file with environment variables
update_config() {
    CONFIG_FILE="/var/www/html/includes/config.inc.php"
    TEMPLATE_FILE="/var/www/html/install/config.inc.php.tmp"
    
    if [[ -n "${DB_HOST}" ]] && [[ -n "${DB_NAME}" ]]; then
        echo "📝 Updating configuration from environment variables..."
        
        # Backup existing config
        if [[ -f "$CONFIG_FILE" ]]; then
            cp "$CONFIG_FILE" "$CONFIG_FILE.bak"
        fi
        
        # Generate new config from template
        cp "$TEMPLATE_FILE" "$CONFIG_FILE"
        
        # Replace placeholders
        sed -i "s|{db_port}|${DB_PORT:-3306}|g" "$CONFIG_FILE"
        sed -i "s|{db_host}|${DB_HOST:-localhost}|g" "$CONFIG_FILE"
        sed -i "s|{db_user}|${DB_USER:-gmoplus}|g" "$CONFIG_FILE"
        sed -i "s|{db_pass}|${DB_PASSWORD:-}|g" "$CONFIG_FILE"
        sed -i "s|{db_name}|${DB_NAME:-gmoplus}|g" "$CONFIG_FILE"
        sed -i "s|{db_prefix}|${DB_PREFIX:-fl_}|g" "$CONFIG_FILE"
        sed -i "s|{rl_dir}|''|g" "$CONFIG_FILE"
        sed -i "s|{rl_root}|/var/www/html|g" "$CONFIG_FILE"
        sed -i "s|{rl_url}|'${APP_URL:-https://gmoplus.com}/'|g" "$CONFIG_FILE"
        sed -i "s|{rl_admin}|'admin'|g" "$CONFIG_FILE"
        sed -i "s|{rl_cache_postfix}|_$(date +%s)|g" "$CONFIG_FILE"
        
        # Update Redis settings if provided
        if [[ -n "${REDIS_HOST}" ]]; then
            sed -i "s|define('RL_REDIS_HOST', '127.0.0.1')|define('RL_REDIS_HOST', '${REDIS_HOST}')|g" "$CONFIG_FILE"
        fi
        if [[ -n "${REDIS_PORT}" ]]; then
            sed -i "s|define('RL_REDIS_PORT', 6379)|define('RL_REDIS_PORT', ${REDIS_PORT})|g" "$CONFIG_FILE"
        fi
        if [[ -n "${REDIS_PASSWORD}" ]]; then
            sed -i "s|define('RL_REDIS_PASS', '')|define('RL_REDIS_PASS', '${REDIS_PASSWORD}')|g" "$CONFIG_FILE"
        fi
        
        echo "✅ Configuration updated successfully!"
    else
        echo "ℹ️  Using existing configuration (no DB_HOST/DB_NAME env vars provided)"
    fi
}

# Function to wait for database
wait_for_db() {
    if [[ -n "${DB_HOST}" ]]; then
        echo "⏳ Waiting for database connection..."
        
        max_attempts=30
        attempt=0
        
        while [ $attempt -lt $max_attempts ]; do
            if php -r "new PDO('mysql:host=${DB_HOST};port=${DB_PORT:-3306}', '${DB_USER:-root}', '${DB_PASSWORD:-}');" 2>/dev/null; then
                echo "✅ Database connection established!"
                return 0
            fi
            
            attempt=$((attempt + 1))
            echo "   Attempt $attempt/$max_attempts - Database not ready, waiting..."
            sleep 2
        done
        
        echo "❌ Could not connect to database after $max_attempts attempts"
        exit 1
    fi
}

# Fix permissions
fix_permissions() {
    echo "🔧 Fixing file permissions..."
    chown -R www-data:www-data /var/www/html/files
    chown -R www-data:www-data /var/www/html/tmp
    chown -R www-data:www-data /var/www/html/backup
    chmod -R 755 /var/www/html
    chmod -R 777 /var/www/html/tmp
    chmod -R 777 /var/www/html/files
    chmod -R 777 /var/www/html/backup
    echo "✅ Permissions fixed!"
}

# Clear cache
clear_cache() {
    echo "🧹 Clearing cache..."
    find /var/www/html/tmp/cache_* -type f -delete 2>/dev/null || true
    echo "✅ Cache cleared!"
}

# Main execution
update_config
wait_for_db
fix_permissions
clear_cache

echo "🎉 GMO Plus initialization complete!"
echo "🌐 Starting Apache web server..."

# Execute the original command (apache2-foreground)
exec "$@"
