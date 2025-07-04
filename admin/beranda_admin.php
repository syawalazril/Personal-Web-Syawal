<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

require_once("../koneksi.php");

$username = $_SESSION['username'];

$jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel"));
$jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Header -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    Halaman Administrator
  </header>

  <!-- Container -->
  <div class="flex max-w-7xl mx-auto mt-8 px-4">

    <!-- Sidebar -->
    <aside class="w-1/4 bg-[#DD0000] text-white rounded shadow p-4">
      <h2 class="text-xl font-semibold mb-4 text-center">MENU</h2>
      <ul class="space-y-2">
        <li><a href="beranda_admin.php" class="block hover:text-yellow-300">Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-yellow-300">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block hover:text-yellow-300">Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-yellow-300">About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
             class="block text-black hover:underline font-medium">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
      <div class="text-lg text-gray-800 mb-4">
        Halo, <strong class="text-[#DD0000]"><?= htmlspecialchars($username) ?></strong>! Apa kabar? 😊
      </div>
      <p class="text-sm text-gray-600">Silakan gunakan menu di samping untuk mengelola data.</p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
        <!-- Card Artikel -->
        <div class="bg-white shadow rounded p-4 text-center border-t-4 border-[#DD0000]">
          <h3 class="text-xl font-semibold text-[#DD0000]">Artikel</h3>
          <p class="text-3xl font-bold text-gray-800"><?= $jumlah_artikel ?></p>
        </div>

        <!-- Card Gallery -->
        <div class="bg-white shadow rounded p-4 text-center border-t-4 border-[#FFCC00]">
          <h3 class="text-xl font-semibold text-yellow-600">Gallery</h3>
          <p class="text-3xl font-bold text-gray-800"><?= $jumlah_gallery ?></p>
        </div>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-10 font-semibold">
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer>

</body>
</html>
