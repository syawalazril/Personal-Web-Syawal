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

![image](https://github.com/user-attachments/assets/02428f72-5d0b-406d-8f81-199eca4fbcf6)


**User Interface Halaman Publik**

A. Halaman Home / Artikel

Halaman Home atau Halaman Artikel adalah halaman yang menampilkan daftar artikel dan artikel terbaru.

![image](https://github.com/user-attachments/assets/93aa04f9-43ef-4b9f-aaec-ef53194b4164)


B. Halaman Gallery

Halaman Gallery adalah halaman yang menampilkan foto-foto mahasiswa secara individu.

![image](https://github.com/user-attachments/assets/a5d563ab-131a-4612-b0bb-1b60309a5c5e)

C. Halaman About

Halaman About adalah halaman yang menampilkan deskripsi tentang saya atau profile dari masing-masing mahasiswa.

![image](https://github.com/user-attachments/assets/ee0c199b-bb17-4650-95a2-2404ee29e51f)

**User Interface Halaman Admin**

A. Halaman Login

Halaman Login adalah halaman yang digunakan untuk mengakses halaman admin, diperlukan username dan password.

![image](https://github.com/user-attachments/assets/e58e8edf-aaea-484c-a72a-ea219819af1a)

B. Halaman Beranda

Halaman Beranda merupakan halaman yang menampilkan statistik Jumlah Artikel dan Jumlah Gallery.

![image](https://github.com/user-attachments/assets/4dfb3316-814f-46d3-8f8d-e380ba9dd4ee)


C. Halaman Kelola Artikel

Halaman Kelola Artikel adalah halaman untuk mengelola Artikel dimulai dari Tampil Artikel, Tambah Artikel, Edit Artikel dan Hapus Artikel.

![image](https://github.com/user-attachments/assets/d3f16e5d-c4c0-43d9-8788-a759cc210158)
![image](https://github.com/user-attachments/assets/fb0b4a37-772b-429b-8cf4-46108840a794)
![image](https://github.com/user-attachments/assets/b2a73d64-9a8c-42fd-903c-4d22d704b598)

D. Halaman Kelola Gallery

Halaman Kelola Gallery adalah halaman untuk mengelola Gallery dimulai dari Tampil Gallery, Tambah Gallery, Edit Gallery dan Hapus Gallery.

![image](https://github.com/user-attachments/assets/05df966c-abbd-4325-b4f7-a694d435b7fb)
![image](https://github.com/user-attachments/assets/1b255072-0584-4500-815e-e5b9f2ce1a6e)
![image](https://github.com/user-attachments/assets/5ff9ffbf-a5c0-4388-b4cf-a82c6701b8e9)

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
