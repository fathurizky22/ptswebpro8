# CRUD Students - PTS Web Programming

Proyek ini adalah **Penilaian Tengah Semester (PTS) Student Day Programming Web** dengan materi **CRUD (Create, Read, Update, Delete)** untuk tabel **students**.

## Struktur Database
Tabel: `students`
- `id` (Primary Key, Auto Increment)
- `nama` (Name)
- `jekel` (Gender: L = Laki-laki, P = Perempuan)
- `kelas` (Class)

## Fitur
- Tambah data siswa
- Lihat daftar siswa
- Edit data siswa
- Hapus data siswa

## Cara Menjalankan
1. Import file SQL berikut di phpMyAdmin:
   ```sql
   CREATE DATABASE ptswebpro8;
   USE ptswebpro8;

   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nama VARCHAR(100) NOT NULL,
       jekel ENUM('L','P') NOT NULL,
       kelas VARCHAR(10) NOT NULL
   );
   ```
2. Simpan semua file di folder `htdocs/ptswebpro8`
3. Akses melalui browser: `http://localhost/ptswebpro8/index.php`

## Teknologi
- PHP 8.2 (XAMPP)
- MySQL
- HTML sederhana
