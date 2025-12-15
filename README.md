# Laravel Google OAuth Authentication

![Tampilan Project](sc/laravel.png)

## 📋 Tentang Project
Project ini adalah implementasi sistem autentikasi pengguna berbasis **Identity as a Service (IDaaS)** menggunakan **Laravel**. Fokus utama dari aplikasi ini adalah fitur login yang aman dan mudah menggunakan **Google OAuth**.

Aplikasi ini dibuat sebagai bagian dari tugas/project kuliah untuk mendemonstrasikan integrasi API Google Cloud Platform dengan framework Laravel, khususnya untuk kebutuhan login pihak ketiga.

**Dibuat oleh:**
* **Nama:** Akmal Muhammad Akbar
* **NIM:** G.211.23.0050

---

## 🚀 Fitur Utama
* **User Login System:** Sistem login pengguna standar (email & password).
* **Google OAuth Integration:** Login instan menggunakan akun Google (Gmail) yang terintegrasi dengan Google Cloud Platform.
* **Identity Management:** Pengelolaan sesi dan identitas pengguna yang aman, mencakup registrasi dan otorisasi.
* **Landing Page:** Halaman muka default Laravel yang telah disesuaikan.

## 🛠️ Teknologi yang Digunakan
* [Laravel](https://laravel.com/) - Web Framework
* [Google Cloud Platform](https://console.cloud.google.com/) - Untuk kredensial OAuth 2.0
* PHP, Composer
* MySQL (atau database pilihan lainnya)

---

## 💻 Panduan Instalasi (Localhost)

Ikuti panduan ini untuk menginstal dan menjalankan proyek Laravel ini di lingkungan lokal Anda.

### 1. Persiapan Lingkungan

Pastikan sistem Anda sudah memiliki prasyarat berikut:

| Prasyarat | Versi Rekomendasi | Keterangan |
| :--- | :--- | :--- |
| **PHP** | 8.2 atau lebih tinggi | Laravel memerlukan versi PHP modern. |
| **Composer** | Terbaru | Alat manajemen dependensi untuk PHP. |
| **Server** | XAMPP/WAMP/Laragon | Server lokal untuk PHP dan database. |

### 2. Instalasi Proyek

1.  **Clone Repository**
    Buka terminal dan unduh kode proyek:
    ```bash
    git clone [https://github.com/username-kamu/nama-repo.git](https://github.com/username-kamu/nama-repo.git)
    cd nama-repo
    ```

2.  **Install Dependencies**
    Instal semua paket PHP yang dibutuhkan menggunakan Composer:
    ```bash
    composer install
    npm install
    npm run dev # Untuk kompilasi aset frontend
    ```

3.  **Setup Environment**
    Buat file `.env` dengan menduplikasi file `.env.example`:
    ```bash
    cp .env.example .env
    ```

### 3. Konfigurasi Google OAuth & Database

1.  **Generate Key & Database**
    Jalankan perintah untuk membuat kunci aplikasi yang aman dan membuat tabel database:
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

2.  **Konfigurasi Kredensial di `.env`**
    Buka file `.env` dan atur database serta kredensial Google Anda (yang didapatkan dari Google Cloud Console):

    ```env
    DB_DATABASE=nama_database_kamu # <-- Ganti dengan nama database Anda

    # Kredensial Google OAuth
    GOOGLE_CLIENT_ID=your-google-client-id
    GOOGLE_CLIENT_SECRET=your-google-client-secret
    GOOGLE_REDIRECT_URI=[http://127.0.0.1:8000/auth/google/callback](http://127.0.0.1:8000/auth/google/callback)
    ```

### 4. Menjalankan Aplikasi

Jalankan server pengembangan bawaan Laravel:

```bash
php artisan serve
