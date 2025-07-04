<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = mysqli_real_escape_string($db, $_POST['judul']);
  $folder = '../images/';
  
  
  $file_name = $_FILES['foto']['name'];
  $file_tmp = $_FILES['foto']['tmp_name'];
  $file_type = mime_content_type($file_tmp);
  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
  $new_filename = uniqid() . "." . strtolower($file_ext);
  $target = $folder . $new_filename;

  
  $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
  if (!in_array($file_type, $allowed_types)) {
    echo "<script>alert('File harus berupa gambar (jpg, png, gif, webp).'); history.back();</script>";
    exit;
  }

  
  if (move_uploaded_file($file_tmp, $target)) {
    $sql = "INSERT INTO tbl_gallery (judul, foto) VALUES ('$judul', '$new_filename')";
    $query = mysqli_query($db, $sql);

    if ($query) {
      echo "<script>alert('Gambar berhasil ditambahkan.'); window.location='data_gallery.php';</script>";
    } else {
      echo "<script>alert('Gagal menyimpan data ke database.'); history.back();</script>";
    }
  } else {
    echo "<script>alert('Gagal mengupload gambar.'); history.back();</script>";
  }
} else {
  header('location:data_gallery.php');
}
?>
