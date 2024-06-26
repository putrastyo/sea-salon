## SEA Salon

This app lets users easily browse available services, select their preferred stylist, and book
appointments quickly. With a user-friendly interface and seamless booking integration, making a
reservation with a top stylist has never been easier!

### Tech Stack

1. Laravel
2. MySQL
3. Tailwind (using CDN)

### Fitur

1. Review
2. Reservation
3. Authentication
4. Manage Branch Store

### Persyaratan

-   PHP 8.2 or newest
-   Composer
-   MySQL

### Instalasi

1. Clone respository

```bash
git clone https://github.com/putrastyo/sea-salon.git
cd nama-proyek
```

2. Install dependensi menggunakan Composer

```bash
composer install
```

3. Salin file .env.example menjadi .env

```bash
cp .env.example .env
```

4. Atur konfigurasi pada file .env (terutama Database)

5. Generate kunci aplikasi

```bash
php artisan key:generate
```

6. Migrasi dan seed database

```bash
php artisan migrate --seed
```

7. Menjalankan server

```bash
php artisan serve
```
