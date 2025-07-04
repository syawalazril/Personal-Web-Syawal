<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About | Personal Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    About Me | <span class="italic">Syawal Azril Azim</span>
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

  <!-- About Content -->
  <main class="max-w-4xl mx-auto p-8 mt-10 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-[#DD0000] mb-6 border-b pb-2">Tentang Saya</h2>
    <div class="space-y-6 leading-relaxed text-lg">
      <?php
      if (isset($db)) {
        $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='text-gray-700'>";
          echo nl2br(htmlspecialchars($data['about']));
          echo "</div>";
        }
      } else {
        echo "<p class='text-red-600'>Koneksi ke database gagal.</p>";
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
