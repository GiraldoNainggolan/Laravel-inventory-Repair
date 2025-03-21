# Inventory Management System  

Aplikasi web ini dibangun sebagai bagian dari KP Simulasi di **Dinas Pendidikan dan Arsip Gudang Kota Serang**, menggunakan **Laravel**.  

### 📌 Latar Belakang  
Pada lokasi penelitian, proses transaksi permintaan, peminjaman, dan pengambilan barang memerlukan pengecekan langsung di gudang yang terletak di lantai 2. Sementara itu, mayoritas pelanggan berada di lantai 1. Selain itu, pencatatan barang di gudang masih dilakukan secara manual dan kurang mendetail, yang menyebabkan transaksi menjadi lambat.  

Oleh karena itu, aplikasi ini dikembangkan untuk **mempercepat dan mempermudah transaksi serta pengelolaan barang** dengan sistem digital yang lebih terstruktur.  

---

## 🚀 Cara Instalasi  

Pastikan **Git** dan **Composer** telah terinstal, kemudian jalankan perintah berikut:  

```sh
# 1. Clone repository
git clone <repository-url>

# 2. Copy file konfigurasi
cp .env.example .env

# 3. Atur database di file .env
nano .env  # atau gunakan editor lain seperti VS Code atau Notepad++

# 4. Install dependensi
composer install

# 5. Generate application key
php artisan key:generate

# 6. Jalankan migrasi dan seeding database
php artisan migrate --seed
```

---

## 🔑 Akun Super Admin  
Gunakan kredensial berikut untuk login sebagai **Super Admin**:  

```
Email: giraldo@gmail.com  
Password: password
```

---

## ✨ Fitur Aplikasi  

### 🔹 Role dan Hak Akses  
- **Super Admin**  
- **Admin**  
- **Customer**  

### 🔹 Manajemen Data  
✅ **Kategori** (Super Admin & Admin)  
✅ **Supplier** (Super Admin & Admin)  
✅ **Barang** (Super Admin & Admin)  
✅ **User** (Super Admin & Admin)  
✅ **Transaksi** (Super Admin & Admin)  
✅ **Roles & Permission** (Super Admin)  

### 🔹 Dashboard (Super Admin & Admin)  
📌 Barang paling populer  
📌 Notifikasi permintaan barang yang belum diverifikasi  
📌 List barang dengan stok kurang dari 10  
📌 Statistik jumlah:  
   - Kategori  
   - Supplier  
   - Barang  
   - Kendaraan  
   - Customer  
   - Permintaan Barang  
   - Barang Keluar  
   - Barang Keluar Bulan Ini  

### 🔹 Fitur Lainnya  
✅ Permintaan Barang (Semua Role)  
✅ Peminjaman Kendaraan (Semua Role)  
✅ Pengembalian Kendaraan (Semua Role)  
✅ Keranjang (Semua Role)  
✅ Mengubah Akun (Semua Role)  
✅ List Transaksi (Semua Role)  
✅ Pencarian Data  
✅ Desain **responsive**  

---

## 📜 License  
Aplikasi ini **bersifat open source** dan dapat digunakan oleh siapa pun, **dengan syarat tidak diperjualbelikan**.  

---

### 🚀 Let's Get Started!  
Jika tertarik untuk mengembangkan atau berkontribusi, silakan fork repository ini dan buat pull request!  

---
