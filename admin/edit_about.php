<?php 
include('../koneksi.php'); 
session_start(); 
if (!isset($_SESSION['username'])) { 
  header('location:login.php'); 
  exit; 
} 

if (!isset($_GET['id_about']) || !is_numeric($_GET['id_about'])) {
  echo "<script>alert('ID tidak valid!'); window.location='about.php';</script>";
  exit;
}

$id = mysqli_real_escape_string($db, $_GET['id_about']);
$sql = "SELECT * FROM tbl_about WHERE id_about = '$id'";
$query = mysqli_query($db, $sql);

if (!$query || mysqli_num_rows($query) == 0) {
  echo "<script>alert('Data tidak ditemukan!'); window.location='about.php';</script>";
  exit;
}

$data = mysqli_fetch_array($query);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Edit About</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
</head> 
<body class="bg-gray-100 min-h-screen"> 

  <!-- Header --> 
  <header class="bg-black text-white text-center p-6 text-3xl font-bold shadow"> 
    Edit Data About
  </header> 

  <div class="flex max-w-7xl mx-auto mt-8 px-4"> 

    <!-- Sidebar --> 
    <aside class="w-1/4 bg-[#DD0000] text-white rounded shadow p-4"> 
      <h2 class="text-xl font-semibold mb-4 text-center">MENU</h2> 
      <ul class="space-y-2">
        <li><a href="beranda_admin.php" class="block hover:text-yellow-300">Beranda</a></li> 
        <li><a href="data_artikel.php" class="block hover:text-yellow-300">Kelola Artikel</a></li> 
        <li><a href="data_gallery.php" class="block hover:text-yellow-300">Kelola Gallery</a></li> 
        <li><a href="about.php" class="block font-semibold text-yellow-300">About</a></li> 
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" 
             class="block text-black hover:underline font-medium">Logout</a>
        </li> 
      </ul> 
    </aside> 

    <!-- Main Content --> 
    <main class="w-3/4 bg-white rounded shadow p-6 ml-6"> 
      <form action="proses_edit_about.php" method="post" class="space-y-6"> 
        <input type="hidden" name="id_about" value="<?= htmlspecialchars($data['id_about']); ?>"> 
        <div> 
          <label for="about" class="block text-sm font-medium text-gray-700 mb-1">About</label> 
          <textarea id="about" name="about" rows="5" required 
            class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-[#DD0000]"><?= htmlspecialchars($data['about']); ?></textarea> 
        </div> 
        <div class="flex justify-end space-x-4"> 
          <button type="submit" class="bg-[#DD0000] text-white px-4 py-2 rounded hover:bg-black transition">Update</button> 
          <a href="about.php" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Batal</a> 
        </div> 
      </form> 
    </main> 
  </div> 

  <!-- Footer --> 
  <footer class="bg-[#FFCC00] text-black text-center py-4 mt-10 font-semibold"> 
    &copy; <?= date('Y'); ?> | Created by <span class="italic">Syawal Azril Azim</span>
  </footer> 

</body> 
</html>
