<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = mysqli_real_escape_string($db, $_POST['nama_artikel']);
  $isi   = mysqli_real_escape_string($db, $_POST['isi_artikel']);

  $sql = "INSERT INTO tbl_artikel (nama_artikel, isi_artikel) VALUES ('$judul', '$isi')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    echo "<script>alert('Artikel berhasil ditambahkan.'); window.location='data_artikel.php';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan artikel!'); history.back();</script>";
  }
} else {
  header('location:data_artikel.php');
}
?>
