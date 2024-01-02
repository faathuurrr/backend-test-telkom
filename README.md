# Panduan Penggunaan L-5Swagger

Ini adalah panduan singkat tentang cara menggunakan l-5Swagger untuk menghasilkan dokumentasi API yang terdokumentasi dengan baik pada proyek Laravel.

## Apa itu l-5Swagger?

L-5Swagger adalah sebuah paket Laravel yang memungkinkan pengguna untuk menghasilkan dokumentasi API secara otomatis berdasarkan kode yang telah ditulis. Ini membantu dalam membuat dokumentasi yang jelas dan terstruktur untuk API yang dibangun dengan menggunakan Laravel.

## Instalasi

Untuk menggunakan l-5Swagger, pastikan bahwa proyek Laravel Anda telah terpasang dan siap untuk pengembangan.

1. Install melalui Composer:

   ```bash
   composer require darkaonline/l5-swagger

2. Publish konfigurasi
   ```bash
   php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"

3. Lakukan dokumentasi
   ```bash
   php artisan l5-swagger:generate

## Melihat Hasil Dokumentasi

1. Nyalakan localhost seperti yang biasa dilakukan
   ```bash
       php artisan serve

2. Buka web browser dan masukkan url
   ```bash
       http://127.0.0.1:8000
3. Setelah masuk ke localhost, tekan "View Documentation"
   ![Contoh Gambar](https://i.ibb.co/44KWB0M/Screenshot-2024-01-02-at-09-57-10.png)
