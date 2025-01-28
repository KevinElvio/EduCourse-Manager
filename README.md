# EduCourse Manager

**EduCourse Manager** adalah aplikasi manajemen kursus yang dirancang untuk mempermudah pengelolaan data siswa, kursus, dan proses pendaftaran kursus. Aplikasi ini menggunakan **PHP** sebagai backend dengan **Blade** untuk *templating engine*.  

## Fitur
- **Manajemen Kursus**  
  Tambahkan, ubah, atau hapus data kursus.  
- **Manajemen Siswa**  
  Kelola data siswa, termasuk informasi pribadi.  
- **Manajemen Pendaftaran**  
  Pendaftaran siswa ke kursus secara terstruktur.  
- **Otentikasi dan Autentikasi**  
  Sistem login dan kontrol akses untuk keamanan data.  

---

## Demo
🚧 **Under Construction**  

---

## Teknologi yang Digunakan
- **Backend**: PHP 10  
- **Database**: MySQL/MariaDB  
- **Frontend**: Blade (PHP Templating Engine) & Tailwind CSS 
- **Dependency Manager**: Composer  
- **Deployment**: Laravel artisan  

## Instalasi

Ikuti langkah-langkah di bawah untuk menjalankan aplikasi di local host Anda:

### Persyaratan
Pastikan sistem Anda memenuhi kebutuhan berikut:
- PHP 8.0 atau lebih baru
- Composer
- Database MySQL/MariaDB
- Web server (Apache/Nginx)
- Node.js dan npm (opsional, untuk pengembangan front-end)

### Langkah-langkah Instalasi

1. **Clone Repositori**  
   ```bash
   git clone https://github.com/KevinElvio/EduCourse-Manager.git
   cd EduCourse-Manager
   ```

2. **Instal Dependensi Backend**  
   Jalankan perintah berikut untuk menginstal semua dependensi:
   ```bash
   composer install
   ```

3. **Konfigurasi File `.env`**  
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Atur konfigurasi database Anda di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

4. **Buat Database**  
   Buat database di MySQL sesuai dengan konfigurasi di file `.env`.

5. **Migrasi Database**  
   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```

6. **Seed Data Awal** (opsional)  
   Tambahkan data dummy untuk pengujian:
   ```bash
   php artisan db:seed --class=Admin
   php artisan db:seed --class=Course
   php artisan db:seed --class=Student
   php artisan db:seed --class=Registration
   ```
7. **Instal Dependensi Frontend**  
   ```bash
   npm install
   ```
8. **Kompilasi Aset**  
   Untuk mode pengembangan:
   ```bash
   npm run dev
   ```

9. **Jalankan Server**  
   Aktifkan server lokal Laravel:
  ```bash
   php artisan serve
   ```
   Aplikasi akan berjalan di `http://127.0.0.1:8000`.

---

## Akun Admin Default
Gunakan kredensial berikut untuk login ke aplikasi:  
- **Email**: `admin@example.com`  
- **Password**: `admin12345`  

---

## Kontak Pengembang  
**Nama**: Kevin Elvio  
**Email**: kevinelvio18@gmail.com
