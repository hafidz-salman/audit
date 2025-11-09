# Setup Sistem Audit Mutu

## Persyaratan Sistem
- PHP 8.2+
- PostgreSQL 12+
- Composer
- Node.js & NPM

## Instalasi

1. **Clone dan Setup Environment**
   ```bash
   cp .env.example .env
   ```

2. **Konfigurasi Database**
   Edit file `.env` dan sesuaikan konfigurasi database PostgreSQL:
   ```
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=audit_mutu
   DB_USERNAME=postgres
   DB_PASSWORD=your_password
   ```

3. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi dan Seeder**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build Assets**
   ```bash
   npm run build
   ```

7. **Jalankan Server**
   ```bash
   php artisan serve
   ```

## Struktur Database

### Tabel Utama:
- **role**: Peran pengguna (Admin, Auditor, Validator, Staff, Pimpinan)
- **unit**: Unit kerja (Fakultas, Bagian, Pusat)
- **users**: Data pengguna sistem
- **standar_mutu**: Standar mutu yang ditetapkan
- **indikator_kinerja**: Indikator kinerja untuk setiap standar
- **kriteria**: Kriteria penilaian untuk setiap indikator
- **data_kinerja**: Data kinerja yang diinput oleh unit
- **validasi**: Proses validasi data kinerja
- **audit**: Proses audit terhadap data yang telah divalidasi
- **audit_temuan**: Temuan hasil audit
- **tindak_lanjut**: Tindak lanjut dari temuan audit
- **laporan**: Laporan hasil audit
- **audit_trail**: Log aktivitas sistem

## User Default

Setelah menjalankan seeder, tersedia user default:

| Email | Password | Role |
|-------|----------|------|
| admin@audit.com | password | Administrator |
| auditor@audit.com | password | Auditor |
| validator@audit.com | password | Validator |
| staff.teknik@audit.com | password | Staff |
| dekan.ekonomi@audit.com | password | Pimpinan |

## Fitur Utama

1. **Manajemen Pengguna dan Role**
2. **Manajemen Unit Kerja**
3. **Penetapan Standar Mutu dan Indikator**
4. **Input Data Kinerja**
5. **Validasi Data Kinerja**
6. **Proses Audit**
7. **Manajemen Temuan dan Tindak Lanjut**
8. **Pelaporan**
9. **Audit Trail**