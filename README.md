# pemrograman-berbasis-web-UAS
Repositori ini merupakan proyek Ujian Akhir Semester (UAS) Pemrograman Berbasis Web (PBW) yang mengimplementasikan fitur CRUD (Create, Read, Update, Delete) menggunakan PHP dan MySQL. Proyek ini bertujuan untuk melatih mahasiswa dalam membangun aplikasi web dinamis sederhana yang terhubung dengan database
# PBW CRUD UAS

Proyek ini dibuat sebagai bagian dari **Ujian Akhir Semester (UAS) Pemrograman Berbasis Web**.  
Aplikasi ini menerapkan operasi **CRUD (Create, Read, Update, Delete)** menggunakan **PHP Native** dan **MySQL**.

---

## 📂 Struktur Proyek
├── edit-data.php # Halaman untuk mengedit data
├── hapus-data.php # Halaman untuk menghapus data
├── koneksi.php # File koneksi ke database
├── kuliah_pemrograman_web.sql # File SQL untuk import database
├── pertemuan12.php # Form input data (create)
├── proses-pertemuan12.php # Proses penyimpanan data
├── tampil-data.php # Halaman untuk menampilkan data


---

## ⚙️ Cara Menjalankan
1. Clone repository ini ke folder `htdocs` (jika menggunakan XAMPP):
   ```bash
   git clone https://github.com/username/pbw-crud-uas.git

2. Import database:

> Buka phpMyAdmin

> Buat database baru, misalnya db_pbw

> Import file kuliah_pemrograman_web.sql

3. Konfigurasi koneksi.php sesuai dengan username dan password MySQL kamu:

      $host = "localhost";
      $user = "root";
      $pass = "";
      $db   = "db_pbw";


4. Jalankan aplikasi melalui browser:

http://localhost/pbw-crud-uas/tampil-data.php

📚 Library / Teknologi yang Digunakan

PHP Native (tanpa framework)

MySQL (Database)

phpMyAdmin (Manajemen database)

HTML5, CSS3 (Tampilan dasar)

✨ Fitur CRUD

Create → Tambah data mahasiswa

Read → Tampilkan semua data

Update → Edit data mahasiswa

Delete → Hapus data mahasiswa
