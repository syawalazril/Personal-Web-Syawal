<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Personal Web | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    Personal Web | <span class="italic">Syawal Azril Azim</span>
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

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    <!-- Artikel Utama -->
    <section class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold text-[#DD0000] mb-4 border-b pb-2">Artikel Terbaru</h2>
      <div class="space-y-6">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        if ($query && mysqli_num_rows($query) > 0) {
          while ($data = mysqli_fetch_array($query)) {
            echo "<article class='border-l-4 border-[#DD0000] pl-4'>";
            echo "<h3 class='text-xl font-bold text-[#DD0000] mb-1'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
            echo "<p class='text-gray-700'>" . nl2br(htmlspecialchars($data['isi_artikel'])) . "</p>";
            echo "</article>";
          }
        } else {
          echo "<p class='text-gray-600'>Belum ada artikel.</p>";
        }
        ?>
      </div>
    </section>

    <!-- Sidebar -->
    <aside class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold text-[#DD0000] mb-4 border-b pb-2">Daftar Artikel</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<li class='hover:text-[#DD0000] transition'>" . htmlspecialchars($data['nama_artikel']) . "</li>";
        }
        ?>
      </ul>
    </aside>
  </main>

  <!-- Footer -->
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-12 font-semibold">
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer>

</body>
</html>
