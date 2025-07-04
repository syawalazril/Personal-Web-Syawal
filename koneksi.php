<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_syawalazrilazim_d1a240413";

$db = mysqli_connect($host, $user, $password, $database);

if (!$db) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
