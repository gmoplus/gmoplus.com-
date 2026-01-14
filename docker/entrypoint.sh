#!/bin/bash
# GMO Plus - Entrypoint Script for Docker Container
# Simplified version for Coolify compatibility

echo "🚀 GMO Plus - Starting container initialization..."

# Create PHP error log directory
mkdir -p /var/log/php 2>/dev/null
chown www-data:www-data /var/log/php 2>/dev/null

# Function to update config file with environment variables
update_config() {
    CONFIG_FILE="/var/www/html/includes/config.inc.php"
    TEMPLATE_FILE="/var/www/html/install/config.inc.php.tmp"
    
    if [[ -n "${DB_HOST}" ]] && [[ -n "${DB_NAME}" ]]; then
        echo "📝 Updating configuration from environment variables..."
        
        # Backup existing config
        if [[ -f "$CONFIG_FILE" ]]; then
            cp "$CONFIG_FILE" "$CONFIG_FILE.bak" 2>/dev/null
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
        
        echo "✅ Configuration updated successfully!"
    else
        echo "ℹ️  Using existing configuration"
    fi
}

# Quick permission fix (only essential directories)
quick_permissions() {
    echo "🔧 Setting essential permissions..."
    chmod 777 /var/www/html/tmp 2>/dev/null || true
    chmod 777 /var/www/html/files 2>/dev/null || true
    chmod 777 /var/www/html/backup 2>/dev/null || true
    echo "✅ Permissions set!"
}

# Main execution
update_config
quick_permissions

echo "🎉 GMO Plus initialization complete!"
echo "🌐 Starting Apache web server..."

# Execute the original command (apache2-foreground)
exec "$@"
