# GMO Plus - Flynax Classifieds

![Flynax](https://www.flynax.com/images/logo.png)

İlan ve alışveriş platformu yazılımı - **Flynax Classifieds Software v4.10.0** üzerine kurulu.

## 🚀 Coolify ile Kurulum

### Ön Gereksinimler

- [Coolify](https://coolify.io/) kurulu sunucu
- Git erişimi olan repository
- Domain (gmoplus.com)

### Adım Adım Kurulum

#### 1. Coolify Dashboard'a Giriş

Coolify dashboard'unuza giriş yapın: `https://your-coolify-server.com`

#### 2. Yeni Uygulama Oluşturma

1. **Resources** → **Add New** → **Docker Compose**
2. Git repository URL'nizi girin veya dosyaları doğrudan yükleyin
3. Branch: `main` veya `master`

#### 3. Environment Variables Ayarlama

Coolify'da aşağıdaki environment variables tanımlayın:

```env
# Veritabanı
DB_HOST=db
DB_PORT=3306
DB_NAME=gmoplus
DB_USER=gmoplus
DB_PASSWORD=güvenli_şifreniz
DB_PREFIX=fl_
MYSQL_ROOT_PASSWORD=root_şifreniz

# Uygulama
APP_URL=https://gmoplus.com

# Redis (opsiyonel ama önerilir)
REDIS_HOST=redis
REDIS_PORT=6379
```

#### 4. Domain Ayarlama

1. **Settings** → **General** → **Domains**
2. Domain ekleyin: `gmoplus.com`
3. SSL sertifikası: **Lets Encrypt** seçin

#### 5. Deploy

**Deploy** butonuna tıklayın ve işlemin tamamlanmasını bekleyin.

---

## 📁 Dosya Yapısı

```
public_html/
├── Dockerfile              # Docker imaj tanımı
├── docker-compose.yml      # Servis tanımları
├── docker/
│   ├── php.ini             # PHP konfigürasyonu
│   └── entrypoint.sh       # Container başlangıç scripti
├── .env.example            # Örnek environment dosyası
├── admin/                  # Admin paneli
├── includes/               # Core PHP sınıfları
├── libs/                   # Kütüphaneler
├── plugins/                # Eklentiler
├── templates/              # Tema dosyaları
├── files/                  # Yüklenen dosyalar
├── tmp/                    # Geçici dosyalar ve cache
└── install/                # Kurulum wizard
```

---

## 🔧 Manuel Docker Kurulumu

Coolify yerine manuel Docker ile kurmak isterseniz:

```bash
# Repository'yi klonla
git clone https://github.com/your-repo/gmoplus.git
cd gmoplus/public_html

# .env dosyası oluştur
cp .env.example .env
# .env dosyasını düzenle

# Container'ları başlat
docker-compose up -d

# Logları izle
docker-compose logs -f app
```

---

## 🛠️ Yapılandırma

### Veritabanı Bağlantısı

Veritabanı ayarları `includes/config.inc.php` dosyasında bulunur. Docker kullanırken bu dosya otomatik olarak environment variables'dan güncellenir.

Manuel değişiklik için:

```php
define('RL_DBHOST', 'localhost');
define('RL_DBUSER', 'kullanıcı');
define('RL_DBPASS', 'şifre');
define('RL_DBNAME', 'veritabanı');
```

### Redis Cache

Performans için Redis kullanılması önerilir:

```php
define('RL_REDIS_HOST', 'redis');
define('RL_REDIS_PORT', 6379);
define('RL_REDIS_PASS', '');
```

---

## 📊 Sistem Gereksinimleri

| Bileşen | Minimum | Önerilen |
|---------|---------|----------|
| PHP | 8.0 | 8.2 |
| MySQL/MariaDB | 5.7 | 10.11+ |
| RAM | 512MB | 2GB |
| Disk | 5GB | 20GB |

### Gerekli PHP Eklentileri

- GD (image processing)
- PDO MySQL
- cURL
- mbstring
- Zip
- Intl
- XML
- Redis (opsiyonel)
- OPcache (performans)

---

## 🔒 Güvenlik

- Admin paneli: `https://gmoplus.com/admin`
- Varsayılan şifreler mutlaka değiştirilmelidir
- SSL sertifikası zorunludur
- `.htaccess` dosyası SQL injection koruması içerir

---

## 📞 Destek

- **Flynax Destek**: https://www.flynax.com/support
- **Lisans**: FL0255RKH690

---

## 📝 Lisans

Bu yazılım **Flynax Classifieds Software** üzerine kuruludur ve tek domain lisansı (`gmoplus.com`) ile çalışmaktadır.

© 2025 Flynax Classifieds Software - Tüm hakları saklıdır.
