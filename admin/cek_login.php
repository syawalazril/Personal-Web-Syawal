<?php
include('../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $query = mysqli_query($db, $sql);

  if ($query && mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $username;
    header('Location: beranda_admin.php');
    exit();
  } else {
    echo "<script>alert('Login gagal! Username atau password salah.');window.location='login.php';</script>";
  }
} else {
  header('Location: login.php');
  exit();
}
?>
