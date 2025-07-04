<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kelola Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Header  -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    Kelola Gallery
  </header>

  <div class="flex max-w-7xl mx-auto mt-8 px-4">

    <!-- Sidebar -->
    <aside class="w-1/4 bg-[#DD0000] text-white rounded shadow p-4">
      <h2 class="text-xl font-semibold mb-4 text-center">MENU</h2>
      <ul class="space-y-2">
        <li><a href="beranda_admin.php" class="block hover:text-yellow-300">Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-yellow-300">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block font-semibold text-yellow-300">Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-yellow-300">About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
             class="block text-black hover:underline font-medium">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-[#DD0000]">Daftar Gallery</h2>
        <a href="add_gallery.php"
           class="bg-[#DD0000] text-white px-4 py-2 rounded hover:bg-black transition">
          + Tambah Gambar
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
        $query = mysqli_query($db, $sql);
        if ($query && mysqli_num_rows($query) > 0) {
          while ($data = mysqli_fetch_array($query)) {
            echo "<div class='bg-gray-50 border rounded shadow overflow-hidden'>";
            echo "<img src='../images/" . htmlspecialchars($data['foto']) . "' class='w-full h-48 object-cover'>";
            echo "<div class='p-4'>";
            echo "<p class='font-semibold text-gray-800 mb-2'>" . htmlspecialchars($data['judul']) . "</p>";
            echo "<div class='flex justify-between text-sm'>";
            echo "<a href='edit_gallery.php?id_gallery={$data['id_gallery']}' class='text-blue-700 hover:underline'>Edit</a>";
            echo "<a href='delete_gallery.php?id_gallery={$data['id_gallery']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>";
            echo "</div>";
            echo "</div></div>";
          }
        } else {
          echo "<p class='text-gray-600'>Belum ada gambar di galeri.</p>";
        }
        ?>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-10 font-semibold">
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer>

</body>
</html>
