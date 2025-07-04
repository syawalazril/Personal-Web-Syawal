<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['id_artikel']) && is_numeric($_POST['id_artikel'])) {
    $id = mysqli_real_escape_string($db, $_POST['id_artikel']);
    $judul = mysqli_real_escape_string($db, $_POST['nama_artikel']);
    $isi   = mysqli_real_escape_string($db, $_POST['isi_artikel']);

    $sql = "UPDATE tbl_artikel SET nama_artikel = '$judul', isi_artikel = '$isi' WHERE id_artikel = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
      echo "<script>alert('Artikel berhasil diperbarui.'); window.location='data_artikel.php';</script>";
    } else {
      echo "<script>alert('Gagal mengedit artikel.'); history.back();</script>";
    }
  } else {
    echo "<script>alert('ID tidak valid.'); history.back();</script>";
  }
} else {
  header('location:data_artikel.php');
}
?>
