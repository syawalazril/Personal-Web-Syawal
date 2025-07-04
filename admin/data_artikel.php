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
  <title>Kelola Artikel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Header -->
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow">
    HALAMAN ADMIN
  </header>

  <div class="flex max-w-7xl mx-auto mt-8 px-4">

    <!-- Sidebar -->
    <aside class="w-1/4 bg-[#DD0000] text-white rounded shadow p-4">
      <h2 class="text-xl font-semibold mb-4 text-center">MENU</h2>
      <ul class="space-y-2">
        <li><a href="beranda_admin.php" class="block hover:text-yellow-300">Beranda</a></li>
        <li><a href="data_artikel.php" class="block font-semibold text-yellow-300">Kelola Artikel</a></li>
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
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-[#DD0000]">Daftar Artikel</h2>
        <a href="add_artikel.php"
           class="bg-[#DD0000] text-white px-4 py-2 rounded hover:bg-black transition">
          + Tambah Artikel
        </a>
      </div>

      <div class="overflow-x-auto">
        <table class="min-w-full table-auto border border-gray-300 text-sm">
          <thead class="bg-[#DD0000] text-white">
            <tr>
              <th class="p-3 border">No</th>
              <th class="p-3 border">Nama Artikel</th>
              <th class="p-3 border">Isi Artikel</th>
              <th class="p-3 border">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
            $query = mysqli_query($db, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
              echo "<tr class='even:bg-gray-50'>";
              echo "<td class='border p-2 text-center'>" . $no++ . "</td>";
              echo "<td class='border p-2'>" . htmlspecialchars($data['nama_artikel']) . "</td>";
              echo "<td class='border p-2'>" . nl2br(htmlspecialchars($data['isi_artikel'])) . "</td>";
              echo "<td class='border p-2 text-center space-x-2'>";
              echo "<a href='edit_artikel.php?id_artikel={$data['id_artikel']}' class='text-blue-700 hover:underline'>Edit</a>";
              echo "<a href='delete_artikel.php?id_artikel={$data['id_artikel']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>";
              echo "</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-10 font-semibold">
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer>

</body>
</html>
