# Website Profile Program Studi Gizi

Website dinamis untuk Program Studi Gizi yang dibangun menggunakan Laravel dengan panel admin Filament untuk manajemen konten.

## 🚀 Fitur Utama

### 1. **Halaman Publik**
- **Beranda**: Landing page dengan hero slider dan informasi utama
- **Profile**: Visi misi, struktur organisasi, profile dosen, prospek lulusan, biaya pendidikan
- **Akademik**: Kurikulum, kalender akademik, jadwal kuliah
- **Kemahasiswaan**: HIMA, IKAHIMA, prestasi mahasiswa, survey pengguna
- **Dokumen**: Akreditasi, kebijakan
- **Publikasi**: Penelitian, pengabdian, publikasi jurnal
- **Informasi**: Berita, agenda, kontak
- **Penjaminan**: Monitoring evaluasi, rencana tindak lanjut, survei

### 2. **Panel Admin Filament**
Dashboard admin yang user-friendly untuk mengelola seluruh konten website dengan fitur:
- **CRUD Operations**: Create, Read, Update, Delete untuk semua data
- **File Upload**: Upload dan manajemen gambar dengan auto-resize
- **Rich Text Editor**: Editor Trix untuk konten artikel
- **Status Management**: Aktif/nonaktif konten
- **Sorting**: Pengaturan urutan tampilan
- **Search & Filter**: Pencarian dan filter data

### 3. **Fitur Dinamis**

#### **Profile**
- **Visi Misi**: Konten dinamis dengan rich text editor
- **Struktur Organisasi**: Card profile dengan foto, nama, jabatan, dan link sosial media
- **Profile Dosen**: Grid card dosen dengan foto dan informasi lengkap
- **Prospek Lulusan**: Kategori lulusan dan prospek kerja
- **Biaya Pendidikan**: Tabel biaya dengan kategori dan nominal

#### **Akademik**
- **Kurikulum**: Konten dinamis dengan rich text editor
- **Kalender Akademik**: Upload banner/poster kalender
- **Jadwal Kuliah**: Upload gambar jadwal kuliah

#### **Kemahasiswaan**
- **Prestasi Mahasiswa**: Tabel prestasi dengan link download Google Drive

#### **Informasi**
- **Berita**: Sistem berita lengkap dengan kategori, featured news, dan pagination
- **Agenda**: Manajemen agenda dengan tanggal dan lokasi
- **Kontak**: Form kontak dengan penyimpanan database

### 4. **Fitur UI/UX**

#### **Multi-language Support**
- Floating action button untuk switch bahasa (Indonesia/English)
- JavaScript translation system

#### **Navigation Enhancement**
- Floating scroll-to-top button
- Floating contact button
- Responsive navigation menu

#### **Image Optimization**
- Auto-resize gambar upload (1200x800px untuk banner, 400x400px untuk profile)
- Optimasi storage server

## 🛠️ Teknologi

- **Backend**: Laravel 11
- **Admin Panel**: Filament 3
- **Database**: MySQL
- **Frontend**: Blade Templates, Tailwind CSS
- **File Storage**: Laravel Storage
- **Rich Text**: Trix Editor

## 📋 Persyaratan Sistem

- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js & NPM
- Web Server (Apache/Nginx)

## 🔧 Instalasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd website-profile
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration
Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=website_profile
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Database Migration
```bash
php artisan migrate
```

### 6. Storage Link
```bash
php artisan storage:link
```

### 7. Build Assets
```bash
npm run build
```

### 8. Create Admin User
```bash
php artisan make:filament-user
```

### 9. Start Development Server
```bash
php artisan serve
```

Website akan tersedia di: `http://localhost:8000`
Admin panel di: `http://localhost:8000/admin`

## 📚 Panduan Penggunaan

### **Akses Admin Panel**
1. Buka `http://localhost:8000/admin`
2. Login dengan kredensial admin yang telah dibuat
3. Dashboard admin akan menampilkan menu navigasi berdasarkan kategori

### **Manajemen Konten**

#### **Profile Management**
- **Visi Misi**: Kelola visi dan misi institusi
- **Struktur Organisasi**: Tambah/edit profile pejabat dengan foto dan link sosmed
- **Profile Dosen**: Manajemen data dosen dengan foto dan informasi lengkap
- **Prospek Lulusan**: Kelola prospek lulusan dan karir
- **Biaya Pendidikan**: Atur informasi biaya pendidikan

#### **Akademik Management**
- **Kurikulum**: Edit konten kurikulum dengan rich text editor
- **Kalender Akademik**: Upload poster/banner kalender akademik
- **Jadwal Kuliah**: Upload gambar jadwal perkuliahan

#### **Kemahasiswaan Management**
- **Prestasi Mahasiswa**: Input data prestasi dengan link Google Drive

#### **Informasi Management**
- **Berita**: 
  - Buat artikel berita dengan rich text editor
  - Set kategori, featured status, dan tanggal publish
  - Upload gambar featured
- **Agenda**: Kelola agenda kegiatan dengan tanggal dan lokasi
- **Kontak**: Lihat pesan yang masuk dari form kontak

### **Tips Penggunaan**

#### **Upload Gambar**
- Gambar akan otomatis diresize sesuai kebutuhan
- Format yang didukung: JPG, PNG, GIF
- Ukuran maksimal: 2MB per file

#### **Rich Text Editor**
- Gunakan toolbar untuk formatting text
- Bisa insert gambar, link, dan list
- Preview tersedia sebelum save

#### **Status Management**
- Toggle "Aktif" untuk show/hide konten di website publik
- Konten nonaktif tidak akan tampil di frontend

#### **Sorting**
- Gunakan field "Sort Order" untuk mengatur urutan tampilan
- Angka kecil akan tampil lebih dulu

## 🎨 Kustomisasi

### **Menambah Menu Baru**
1. Buat model dan migration: `php artisan make:model NamaModel -m`
2. Setup migration dengan field yang dibutuhkan
3. Buat Filament resource: `php artisan make:filament-resource NamaModel`
4. Setup form dan table di resource
5. Tambah route di `web.php`
6. Buat controller method
7. Buat view blade template

### **Styling**
- Edit file CSS di `resources/css/`
- Gunakan Tailwind CSS classes
- Build ulang assets: `npm run build`

### **Bahasa**
- Edit file translation di `resources/lang/`
- Tambah key baru di file JavaScript untuk multi-language

## 🔒 Keamanan

- Semua input ter-validasi
- File upload dibatasi tipe dan ukuran
- Admin panel dilindungi authentication
- CSRF protection aktif
- XSS protection dengan Blade templating

## 📱 Responsive Design

Website fully responsive dan mobile-friendly:
- Mobile-first approach
- Flexible grid system
- Touch-friendly navigation
- Optimized images

## 🚀 Deployment

### **Production Setup**
1. Set environment ke production di `.env`:
```env
APP_ENV=production
APP_DEBUG=false
```

2. Optimize aplikasi:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. Set proper file permissions:
```bash
chmod -R 755 storage bootstrap/cache
```

## 🐛 Troubleshooting

### **Common Issues**

#### **Storage Link Error**
```bash
php artisan storage:link --force
```

#### **Permission Issues**
```bash
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

#### **Database Connection Error**
- Periksa kredensial database di `.env`
- Pastikan MySQL service running
- Test koneksi database

#### **Asset Not Loading**
```bash
npm run build
php artisan view:clear
```

## 📞 Support

Untuk bantuan teknis atau pertanyaan:
- Dokumentasi Laravel: https://laravel.com/docs
- Dokumentasi Filament: https://filamentphp.com/docs
- Issue tracker: [Repository Issues]

## 📄 License

Project ini menggunakan MIT License. Lihat file `LICENSE` untuk detail lengkap.

---

**Dibuat dengan ❤️ menggunakan Laravel & Filament**