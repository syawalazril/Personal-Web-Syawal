<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}


if (isset($_GET['id_artikel']) && is_numeric($_GET['id_artikel'])) {
  $id = mysqli_real_escape_string($db, $_GET['id_artikel']);

  $sql = "DELETE FROM tbl_artikel WHERE id_artikel = '$id'";
  $query = mysqli_query($db, $sql);

  if ($query) {
    echo "<script>alert('Artikel berhasil dihapus.'); window.location='data_artikel.php';</script>";
  } else {
    echo "<script>alert('Gagal menghapus artikel.'); window.location='data_artikel.php';</script>";
  }
} else {
  echo "<script>alert('ID artikel tidak valid.'); window.location='data_artikel.php';</script>";
}
?>
