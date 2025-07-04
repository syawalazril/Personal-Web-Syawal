<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_about = mysqli_real_escape_string($db, $_POST['id_about']);
  $about = mysqli_real_escape_string($db, $_POST['about']);

  $sql = "UPDATE tbl_about SET about = '$about' WHERE id_about = '$id_about'";
  $query = mysqli_query($db, $sql);

  if ($query) {
    echo "<script>alert('Data About berhasil diperbarui.'); window.location='about.php';</script>";
  } else {
    echo "<script>alert('Gagal mengupdate data.'); history.back();</script>";
  }
} else {
  header('location:about.php');
}
?>
