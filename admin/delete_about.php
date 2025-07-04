<?php 
include('../koneksi.php'); 
session_start(); 

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}


if (isset($_GET['id_about']) && is_numeric($_GET['id_about'])) {
  $id = mysqli_real_escape_string($db, $_GET['id_about']);
  
  $sql = "DELETE FROM tbl_about WHERE id_about = '$id'";
  $query = mysqli_query($db, $sql);

  if ($query) {
    echo "<script>alert('Data About berhasil dihapus.'); window.location='about.php';</script>";
  } else {
    echo "<script>alert('Gagal menghapus data.'); window.location='about.php';</script>";
  }
} else {
  echo "<script>alert('Permintaan tidak valid.'); window.location='about.php';</script>";
}
?>
