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
  <title>Kelola About</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
</head> 
<body class="bg-gray-100 min-h-screen"> 

  <!-- Header (Hitam) --> 
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow"> 
    Kelola Halaman About
  </header> 

  <div class="flex max-w-7xl mx-auto mt-8 px-4"> 

    <!-- Sidebar (Merah) --> 
    <aside class="w-1/4 bg-[#DD0000] text-white rounded shadow p-4">
      <h2 class="text-xl font-semibold mb-4 text-center">MENU</h2> 
      <ul class="space-y-2">
        <li><a href="beranda_admin.php" class="block hover:text-yellow-300">Beranda</a></li> 
        <li><a href="data_artikel.php" class="block hover:text-yellow-300">Kelola Artikel</a></li> 
        <li><a href="data_gallery.php" class="block hover:text-yellow-300">Kelola Gallery</a></li> 
        <li><a href="about.php" class="block font-bold text-yellow-300">About</a></li> 
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" 
             class="block text-black hover:underline font-medium">Logout</a>
        </li>
      </ul> 
    </aside> 

    <!-- Main Content -->
    <main class="w-3/4 bg-white rounded shadow p-6 ml-6"> 
      <div class="flex justify-between items-center mb-4"> 
        <h2 class="text-xl font-bold text-[#DD0000]">Tentang Saya</h2> 
        <a href="add_about.php" 
           class="bg-[#DD0000] text-white px-4 py-2 rounded hover:bg-black transition">+ Tambah Data</a> 
      </div> 

      <div class="space-y-4"> 
        <?php 
        $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC"; 
        $query = mysqli_query($db, $sql); 
        while ($data = mysqli_fetch_array($query)) { 
          echo "<div class='p-4 bg-gray-50 border rounded shadow'>"; 
          echo "<p class='mb-3 text-gray-800'>" . htmlspecialchars($data['about']) . "</p>"; 
          echo "<div class='flex space-x-4 text-sm'>"; 
          echo "<a href='edit_about.php?id_about={$data['id_about']}' class='text-blue-700 hover:underline'>Edit</a>"; 
          echo "<a href='delete_about.php?id_about={$data['id_about']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>"; 
          echo "</div></div>"; 
        } 
        ?> 
      </div> 
    </main> 
  </div> 

  <!-- Footer (Kuning) --> 
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-10 font-semibold"> 
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer> 

</body> 
</html>
