# Laravel Google OAuth Authentication

![Tampilan Project](sc/laravel.png)

## 📋 Tentang Project
Project ini adalah implementasi sistem autentikasi pengguna berbasis **Identity as a Service (IDaaS)** menggunakan **Laravel**. Fokus utama dari aplikasi ini adalah fitur login yang aman dan mudah menggunakan **Google OAuth**.

Aplikasi ini dikembangkan untuk mendemonstrasikan integrasi API Google Cloud Platform dengan framework Laravel, khususnya untuk keperluan autentikasi pihak ketiga yang modern dan cepat.

**Dibuat oleh:**
* **Nama:** Akmal Muhammad Akbar
* **NIM:** G.211.23.0050

---

## 🚀 Fitur Utama
* **Google OAuth Integration:** Memungkinkan pengguna untuk login instan menggunakan akun Google (Gmail).
* **Identity Management:** Pengelolaan sesi dan identitas pengguna yang aman.
* **Standar Autentikasi Laravel:** Mendukung sistem login standar (email & password) sebagai fallback.
* **Tampilan Minimalis:** Menggunakan *landing page* standar Laravel dengan sentuhan personal.

## 🛠️ Teknologi yang Digunakan
* [Laravel](https://laravel.com/) - PHP Web Framework
* [Google Cloud Platform](https://console.cloud.google.com/) - Penyedia layanan OAuth 2.0
* PHP
* Composer
* MySQL

---

## 💻 Panduan Instalasi (Localhost)

Ikuti panduan terperinci ini untuk menginstal dan menjalankan proyek di lingkungan pengembangan lokal Anda.

### 1. Persiapan Lingkungan

Pastikan sistem Anda sudah memiliki prasyarat berikut:

| Prasyarat | Versi Rekomendasi | Keterangan |
| :--- | :--- | :--- |
| **PHP** | 8.2+ | Diperlukan oleh Laravel. |
| **Composer** | Terbaru | Alat manajemen dependensi. |
| **Server** | XAMPP/WAMP/Laragon | Untuk server web dan database (MySQL/MariaDB). |

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
    npm run dev # Kompilasi aset frontend
    ```

3.  **Setup Environment**
    Buat file `.env` untuk konfigurasi:
    ```bash
    cp .env.example .env
    ```

### 3. Konfigurasi Google OAuth & Database

1.  **Generate Key & Database**
    Jalankan perintah ini untuk membuat kunci aplikasi yang aman dan membuat tabel database:
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

2.  **Konfigurasi Kredensial di `.env`**
    Buka file `.env` dan masukkan detail database serta kredensial Google OAuth yang Anda dapatkan dari Google Cloud Console:

    ```env
    # Pengaturan Database
    DB_DATABASE=nama_database_kamu # <-- Ganti dengan nama database Anda

    # Kredensial Google OAuth 2.0
    GOOGLE_CLIENT_ID=your-google-client-id
    GOOGLE_CLIENT_SECRET=your-google-client-secret
    GOOGLE_REDIRECT_URI=[http://127.0.0.1:8000/auth/google/callback](http://127.0.0.1:8000/auth/google/callback)
    ```

### 4. Menjalankan Aplikasi

Jalankan server pengembangan bawaan Laravel:

```bash
php artisan serve
