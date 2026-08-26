# Changelog

## v3 — Panduan Cuti & Izin, Navigasi, dan Sinkronisasi Desain (26 Agustus 2026)

### Baru
- **`cuti-izin.html`** — Halaman panduan infografis pengajuan cuti & izin karyawan Head Office dengan langkah mudah, tombol link template persetujuan atasan, referensi struktur, dan link kebijakan resmi.
- **Menu Navigasi** — Ditambahkan menu navigasi terpusat pada header `index.html` dan `cuti-izin.html` untuk memudahkan perpindahan halaman.
- **Link Kebijakan Cuti & Izin** — Penambahan link dokumen kebijakan resmi (Google Drive) di menu navigasi `index.html` dan footer `cuti-izin.html`.

### Diubah
- **Sinkronisasi Desain `cuti-izin.html`** — Tampilan diselaraskan sepenuhnya dengan `index.html` (warna ungu-indigo, card rounded, font Inter, clean emoji icons, dll).
- **Status Cuti (C)** — Penambahan opsi status `C` (Cuti) pada tabel absensi `index.html` beserta rekapitulasi, legenda, dan form admin (`admin.html`).
- **Breadcrumb** — Navigasi breadcrumb ditambahkan pada `cuti-izin.html` untuk memudahkan kembali ke Dashboard.

## 16 Juni 2026 — Update v2

### Baru
- **`directorat.html`** — Halaman baru untuk menampilkan anggota berdasarkan direktorat dengan sistem tab (Informatics Technology / Business Development), terintegrasi dengan Supabase, lengkap filtering otomatis untuk data Lead.
- **`admin.html`** — Halaman admin untuk mengelola jadwal libur, terdiri dari 3 tab:
  - **Tambah Jadwal Libur** — Input multi karyawan + multi tanggal + pilihan status (L/I/S) + keterangan, dilengkapi ringkasan dan validasi duplikat.
  - **Tukar Libur** — Dua mode: tukar jadwal dengan karyawan lain, dan pindah jadwal ke tanggal lain. Dilengkapi preview ringkasan sebelum eksekusi.
  - **List Perizinan** — Menampilkan data izin (I) dan sakit (S) per bulan dengan filter bulan, menampilkan nama, tanggal, status, dan keterangan.
- Login admin dengan username `dasar_ria` dan password `baikbaik`.

### Diubah
- **`index.html`** — Ditambahkan sistem tab direktorat (Informatics Technology / Business Development) pada tabel absensi. Data difilter berdasarkan tab aktif: IT menampilkan IT + Lead, BD menampilkan BD + Lead. Ditambahkan tombol Export CSV yang menyesuaikan filter tab aktif.
- **`database.md`** — Dokumentasi struktur database diperbarui sesuai skema aktual: tabel `attendance` (bukan `employee_attendance`), kolom `information`, status `L`/`I`/`S`.

### Dihapus
- **`SQL Input.txt`** — File seed SQL tidak lagi digunakan.
