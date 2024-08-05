# Fitur Autentikasi di Laravel 11

Ini adalah contoh proyek Laravel 11 yang mencakup fitur otentikasi. Proyek ini juga menunjukkan cara menggunakan seeder data untuk mengisi basis data dengan data awal.

## Fitur

-   Registrasi Pengguna
-   Login Pengguna
-   Logout Pengguna
-   Kontrol Akses Berbasis Peran atau Role User
-   Seeder Data untuk Pengguna Awal

## Instalasi

### Prasyarat

-   PHP >= 8.2
-   Composer
-   MySQL atau basis data lain yang didukung
-   Tool Kode Editor

### Langkah-langkah

1. Kloning repositori:

    ```bash
    git clone https://github.com/username-anda/authentication-feature-in-laravel-11.git
    cd authentication-feature-in-laravel-11
    ```

2. Instal dependensi:

    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Konfigurasi basis data Anda di file `.env`:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda

    ```

6. Konfigurasi Database:

    ```bash
    php artisan migrate
    ```

7. Konfigurasi Data Seeder:
    ```bash
    php artisan db:seed
    ```
