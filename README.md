# Personal Web
**Deskripsi**

Studi kasus ini bertujuan untuk membangun sebuah aplikasi web personal yang bersifat dinamis, di mana pemilik web dapat mengelola konten secara mandiri melalui halaman admin. Aplikasi dikembangkan menggunakan PHP dan menyimpan data menggunakan database MySQL. Tampilan antarmuka dirancang menggunakan Tailwind CSS agar responsif, modern, dan mudah dikustomisasi. 

Website ini memiliki dua bagian utama: 
1. Halaman Publik, yang dapat diakses oleh semua pengunjung.
2. Halaman Admin, yang hanya dapat diakses setelah login, digunakan untuk
mengelola konten.

**Fitur-fitur**
1. Login & Logout (Halaman login admin dengan validasi, Sistem sesi untuk melindungi halaman admin, Logout untuk mengakhiri sesi dengan aman)
2. Manajemen Artikel (Tambah artikel (judul + isi),  Edit artikel yang sudah ada, Hapus artikel, Tampilkan daftar artikel di halaman utama, Sidebar "Daftar Artikel" yang terupdate otomatis)
3. Manajemen Gallery (Upload gambar beserta judul, Ganti gambar dan judul yang sudah ada, Hapus gambar, Tampilkan gambar di halaman galeri publik dalam grid responsif)
4. Manajemen About (Tambah deskripsi tentang diri, Edit dan hapus bagian “About”, Tampilkan deskripsi di halaman publik about.php)
5. Dashboard Statistik Admin (Menampilkan ringkasan jumlah: Artikel & Gambar di gallery)
6. Halaman Publik yang Rapi & Dinamis (Artikel terbaru ditampilkan otomatis, Galeri responsif dan ringan, Tentang Saya tampil dengan struktur informatif)

**Teknologi yang Digunakan**
1. Bahasa Pemrograman : PHP
2. Database : MySQL
3. Frontend : Tailwind CSS, HTML
4. Server Side : Apache / XAMPP

**Struktur Folder**

![Screenshot 2025-06-23 115243](https://github.com/user-attachments/assets/0717420f-1eba-4070-bf7e-5dfcb35055de)

**User Interface Halaman Publik**

A. Halaman Home / Artikel

Halaman Home atau Halaman Artikel adalah halaman yang menampilkan daftar artikel dan artikel terbaru.

![Screenshot 2025-06-23 120751](https://github.com/user-attachments/assets/f6854dfd-534c-468d-affb-0320d948e6cf)

B. Halaman Gallery

Halaman Gallery adalah halaman yang menampilkan foto-foto mahasiswa secara individu.

![Screenshot 2025-06-23 121251](https://github.com/user-attachments/assets/72d770c8-1b40-4b4c-bb2c-b3a6ba6d4fc2)

C. Halaman About

Halaman About adalah halaman yang menampilkan deskripsi tentang saya atau profile dari masing-masing mahasiswa.

![Screenshot 2025-06-23 121542](https://github.com/user-attachments/assets/5ee4cf9f-2292-4142-9f35-8d76250a9f46)

**User Interface Halaman Admin**

A. Halaman Login

Halaman Login adalah halaman yang digunakan untuk mengakses halaman admin, diperlukan username dan password.

![Screenshot 2025-06-23 124735](https://github.com/user-attachments/assets/ae7db366-9d04-4867-9adf-5d605a607e97)

B. Halaman Beranda

Halaman Beranda merupakan halaman yang menampilkan statistik Jumlah Artikel dan Jumlah Gallery.

![Screenshot 2025-06-23 124818](https://github.com/user-attachments/assets/43023590-e7e3-48a2-bcdb-b17811ecbcc5)

C. Halaman Kelola Artikel

Halaman Kelola Artikel adalah halaman untuk mengelola Artikel dimulai dari Tampil Artikel, Tambah Artikel, Edit Artikel dan Hapus Artikel.

![Screenshot 2025-06-23 125004](https://github.com/user-attachments/assets/31ccedd0-7a80-4db8-97fe-8844b8bfd8b2)
![Screenshot 2025-06-23 125120](https://github.com/user-attachments/assets/8014df4c-c4a8-4d84-89ae-5ef0894b8566)
![Screenshot 2025-06-23 125137](https://github.com/user-attachments/assets/208c3305-20da-4341-affb-710456114b24)

D. Halaman Kelola Gallery

Halaman Kelola Gallery adalah halaman untuk mengelola Gallery dimulai dari Tampil Gallery, Tambah Gallery, Edit Gallery dan Hapus Gallery.

![Screenshot 2025-06-23 125235](https://github.com/user-attachments/assets/e31328cd-c66e-4ddf-922d-f967d4461a94)
![Screenshot 2025-06-23 125250](https://github.com/user-attachments/assets/d37f4feb-5755-4644-9435-0bf03bc1fcf8)
![Screenshot 2025-06-23 125306](https://github.com/user-attachments/assets/3891ce33-96e6-43f9-84d6-07c3f523a073)

E. Halaman About

Halaman About adalah halaman untuk mengelola About dimulai dari Tampil About, Tambah About, Edit About dan Hapus About.

![Screenshot 2025-06-23 125620](https://github.com/user-attachments/assets/493bc27d-741a-49e2-bf76-8a09f2951aaa)
![Screenshot 2025-06-23 125637](https://github.com/user-attachments/assets/26138bce-c510-4a6f-ac76-a8318974b198)
![Screenshot 2025-06-23 125648](https://github.com/user-attachments/assets/5c81c9ed-d554-42df-8c82-8efa468f0c60)

**PENAMBAHAN FITUR BARU (OPSIONAL) TAMBAHAN NILAI**
1. Login Multiuser + Hak Akses
2. Kategori / Tag Artikel
3. Komentar Artikel
4. Form Kontak / Buku Tamu
5. Statistik Pengunjung
6. Fitur Pencarian
7. Tampilan Dark Mode
8. Jadwal / Timeline Kegiatan
9. Integrasi AI
10. Fitur lainnya sesuai keinginan
