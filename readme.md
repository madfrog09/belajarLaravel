# Larabuk

Sistem Informasi Perpustakaan Laravel 5.4 & Admin LTE. Larabuk versi peningkatan dari [Larapus](https://github.com/ryanrahman26/larapus) sample projek e-book [Seminggu Belajar Laravel](https://leanpub.com/seminggubelajarlaravel) oleh [Rahwat Awaludin](http://facebook.com/rahmat.awaludin).

## Demo

[http://larabuk.esy.es](http://larabuk.esy.es)

**Admin**
- Email: admin@gmail.com
- Password: rahasia

**Member**
- Email: member@gmail.com
- Password: rahasia

atau kamu bisa [register](http://larabuk.esy.es/register) dengan emailmu sebagai member :)

## Fitur

**Admin**
- Tambah, Ubah, Hapus Penulis
- Tambah, Ubah, Hapus Buku
- Tambah, Ubah, Hapus Member
- Melihat Detail Peminjaman Member
- Statistics Peminjaman Buku
- Export Buku ke PDF/Excel
- Import Buku dari Excel

**Member**
- Meminjam Buku
- Mengembalikan Buku

**Autentifikasi**
- Login
- Register
- Lupa Password
- Lihat Profile/Ubah Profile
- Ubah Password

**Dan masih banyak lagi..**

## Install

- Download repository [ini](https://github.com/ryanrahman26/larabuk/archive/master.zip) dan extract di komputar Anda
- Buka terminal masuk direktory utama dan jalankan `composer install`
- Copy file `.env.examples` menjadi `.env`
- Tambahkan `NOCAPTCHA_SECRET` dan `NOCAPTCHA_SITEKEY` di file `.env` kemudian isi key dari [Google Recaptcha](https://www.google.com/recaptcha)
- Buat database kemudian set `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, di file `.env`
- Set email address di `config/mail.php` dengan email GMail valid karena Larabuk menggunakan SMTP GMail
```
'from' => [
    'address' => env('MAIL_FROM_ADDRESS', 'email@gmail.com'),
    'name' => env('MAIL_FROM_NAME', 'Admin Larabuk'),
],
```
- Set email address di `.env`
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=email@gmail.com
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
```
- Jalankan `php artisan migrate --seed`
- Jalankan web server `php artisan serve`
- Buka `localhost:8000` dibrowser

# Ketemu error ?

Silahkan mengirim e-mail ke ryanrahman26@gmail.com

# License

[MIT license](http://opensource.org/licenses/MIT)
