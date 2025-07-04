<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $about = mysqli_real_escape_string($db, $_POST['about']);

  $sql = "INSERT INTO tbl_about (about) VALUES ('$about')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='about.php';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data!'); window.location='about.php';</script>";
  }
} else {
  
  header('location:about.php');
}
?>
