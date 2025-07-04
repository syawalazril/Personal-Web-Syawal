<?php
require_once("../koneksi.php");
$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $check = mysqli_query($db, "SELECT * FROM tbl_user WHERE username='$username'");
  if (mysqli_num_rows($check) > 0) {
    $error = "Username sudah terdaftar!";
  } else {
    $query = mysqli_query($db, "INSERT INTO tbl_user (username, password) VALUES ('$username', '$password')");
    if ($query) {
      $success = "Registrasi berhasil! Silakan login.";
    } else {
      $error = "Terjadi kesalahan saat mendaftar.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 to-red-100 min-h-screen flex justify-center items-center">

  <form method="post" class="bg-white p-8 rounded-lg shadow-md w-80">
    <h2 class="text-2xl font-bold mb-4 text-center text-[#DD0000]">Registrasi</h2>

    <?php if (!empty($error)) : ?>
      <div class="bg-red-100 border border-red-300 text-red-700 p-2 rounded mb-4 text-sm">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Username" required class="w-full p-2 border mb-4 rounded" />
    <input type="password" name="password" placeholder="Password" required class="w-full p-2 border mb-4 rounded" />
    <button type="submit" class="w-full bg-black text-white p-2 rounded hover:bg-yellow-400 hover:text-black font-semibold">Daftar</button>
    <p class="text-sm mt-3 text-center">Sudah punya akun? <a href="login.php" class="text-blue-500 underline">Login</a></p>
  </form>
</body>
</html>
