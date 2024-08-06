# Nasari Digital

Proyek Nasari Digital adalah aplikasi web yang dibangun menggunakan framework Laravel. Proyek ini termasuk sistem autentikasi dasar, halaman beranda yang dapat diakses setelah login, dan fitur logout.

## Fitur

-   Autentikasi Pengguna (Login & Logout)
-   Halaman Beranda setelah Login
-   Desain responsif

## Persyaratan Sistem

-   PHP >= 7.3
-   MySQL atau MariaDB
-   Composer
-   npm

## Instalasi

Ikuti langkah-langkah berikut untuk mengatur dan menjalankan proyek di lingkungan lokal Anda.

### Langkah 1: Klon Repositori

Mulai dengan mengkloning repositori ini di mesin lokal Anda.

```bash
git clone https://github.com/username/nasari-digital.git
cd nasari-digital
```

### Langkah 2: Instalasi Dependensi

Jalankan Composer untuk menginstal dependensi PHP.

```bash
composer install
```

### Langkah 3: Konfigurasi env

```bash
cp .env.example .env
```

Edit file .env dan masukkan kredensial database Anda:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_database_anda
DB_PASSWORD=password_database_anda
```

### Langkah 4: Generate App Key

```bash
php artisan key:generate
```

### Langkah 5: Migrasi dan seeder

```bash
php artisan migrate --seed
```

### Langkah 6: Running server and client

```bash
npm install && npm run dev
```

Buka new tab terminal dan running server

```bash
php artisan serve
```

Penggunaan

-   Login: Akses /login dan gunakan kredensial yang telah di-seed ke database.
-   Beranda: Setelah login, Anda akan diarahkan ke halaman beranda yang menyambut pengguna.
-   Logout: Terdapat opsi untuk logout pada halaman beranda.
