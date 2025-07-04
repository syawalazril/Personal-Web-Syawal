<?php
include('../koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = mysqli_real_escape_string($db, $_POST['id_gallery']);
  $judul = mysqli_real_escape_string($db, $_POST['judul']);

  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];

  if ($foto != "") {
    $folder = '../images/';
    $file_ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

  
    if (!in_array($file_ext, $allowed_ext)) {
      echo "<script>alert('Hanya file gambar yang diizinkan (jpg, png, gif, webp).'); history.back();</script>";
      exit;
    }

   
    $new_filename = uniqid() . "." . $file_ext;
    $target = $folder . $new_filename;

    if (move_uploaded_file($tmp, $target)) {
   
      $query_lama = mysqli_query($db, "SELECT foto FROM tbl_gallery WHERE id_gallery = '$id'");
      $data_lama = mysqli_fetch_array($query_lama);
      $foto_lama = $data_lama['foto'];

      if ($foto_lama && file_exists("../images/$foto_lama")) {
        unlink("../images/$foto_lama");
      }

      $sql = "UPDATE tbl_gallery SET judul='$judul', foto='$new_filename' WHERE id_gallery='$id'";
    } else {
      echo "<script>alert('Gagal upload gambar baru.'); history.back();</script>";
      exit;
    }
  } else {
    $sql = "UPDATE tbl_gallery SET judul='$judul' WHERE id_gallery='$id'";
  }

  $query = mysqli_query($db, $sql);
  if ($query) {
    echo "<script>alert('Data gallery berhasil diperbarui.'); window.location='data_gallery.php';</script>";
  } else {
    echo "<script>alert('Gagal mengupdate data.'); history.back();</script>";
  }
} else {
  header('location:data_gallery.php');
}
?>
