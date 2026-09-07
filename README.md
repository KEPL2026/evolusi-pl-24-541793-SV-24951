# Evolusi PL

Aplikasi web sederhana berbasis **Laravel** yang memperkenalkan tiga praktik penting dalam evolusi perangkat lunak: kolaborasi, otomasi, dan pembelajaran berkelanjutan.

## Fitur

Halaman beranda menampilkan pesan pengantar dan tiga kartu prinsip pengembangan. Tampilan dibuat responsif menggunakan CSS sederhana tanpa dependensi frontend tambahan. Aplikasi juga memiliki pengujian fitur Laravel untuk memastikan halaman utama tersedia dan konten inti tetap tampil.

## Menjalankan secara lokal

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Buka `http://127.0.0.1:8000` pada browser.

## Pengujian

```bash
php artisan test
```

Workflow `Laravel CI` menjalankan dua job pada push dan pull request: **Feature tests** untuk pengujian aplikasi dan **PHP syntax check** untuk memeriksa sintaks seluruh kode PHP.

## Alur branch

Pengembangan mengikuti alur `main` → `dev` → `feature/*`. Perubahan fitur dibuat pada branch feature, diajukan ke `dev`, kemudian `dev` diajukan ke `main`. Branch `main` dan `dev` dilindungi dan tidak digunakan untuk push langsung.

## Lisensi

Proyek ini dibuat untuk kebutuhan pembelajaran Evolusi Perangkat Lunak.
