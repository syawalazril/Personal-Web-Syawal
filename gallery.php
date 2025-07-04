<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Gallery | Personal Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    Gallery | <span class="italic">Syawal Azril Azim</span>
  </header>

  <!-- Navigation -->
  <nav class="bg-[#DD0000] text-white shadow">
    <ul class="flex justify-center space-x-10 py-4 font-medium text-lg">
      <li><a href="index.php" class="hover:text-yellow-300 transition">Artikel</a></li>
      <li><a href="gallery.php" class="hover:text-yellow-300 transition">Gallery</a></li>
      <li><a href="about.php" class="hover:text-yellow-300 transition">About</a></li>
      <li><a href="admin/login.php" class="hover:text-yellow-300 transition">Login</a></li>
    </ul>
  </nav>

  <!-- Gallery Grid -->
  <main class="max-w-7xl mx-auto p-6">
    <h2 class="text-2xl font-semibold text-center text-[#DD0000] mb-8 border-b pb-2">Galeri Foto</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php
      $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
      $query = mysqli_query($db, $sql);
      if ($query && mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden'>";
          echo "<img src='images/" . htmlspecialchars($data['foto']) . "' alt='Gambar' class='w-full h-48 object-cover'>";
          echo "<div class='p-4'>";
          echo "<h3 class='text-lg font-semibold text-[#DD0000]'>" . htmlspecialchars($data['judul']) . "</h3>";
          echo "</div></div>";
        }
      } else {
        echo "<p class='text-center text-gray-600 col-span-full'>Belum ada gambar di galeri.</p>";
      }
      ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-12 font-semibold">
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer>

</body>
</html>
