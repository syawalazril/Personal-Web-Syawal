<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: beranda_admin.php');
  exit();
}

require_once("../koneksi.php");

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username']);
  $password = $_POST['password'];

  if ($username === '' || $password === '') {
    $error = "Username dan password wajib diisi!";
  } else {
    // Amankan input username
    $username = mysqli_real_escape_string($db, $username);

    $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE username='$username'");

    if ($query && mysqli_num_rows($query) > 0) {
      $user = mysqli_fetch_assoc($query);

      // Jika belum pakai password_hash(), pakai perbandingan biasa
      if ($password === $user['password']) {
        $_SESSION['username'] = $user['username'];
        header('Location: beranda_admin.php');
        exit();
      } else {
        $error = "Password salah!";
      }
    } else {
      $error = "Username tidak ditemukan!";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login Administrator</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 to-red-100 min-h-screen flex justify-center items-center">

  <form method="post" class="bg-white p-8 rounded-lg shadow-md w-80">
    <h2 class="text-2xl font-bold mb-4 text-center text-[#DD0000]">Login Admin</h2>

    <?php if (!empty($error)) : ?>
      <div class="bg-red-100 border border-red-300 text-red-700 p-2 rounded mb-4 text-sm">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Username" required
           class="w-full p-2 border rounded mb-4" />
    <input type="password" name="password" placeholder="Password" required
           class="w-full p-2 border rounded mb-4" />
    <button type="submit"
            class="w-full bg-black text-white p-2 rounded hover:bg-yellow-400 hover:text-black font-semibold">
      Login
    </button>
    <p class="text-sm mt-3 text-center">Belum punya akun? <a href="register.php" class="text-blue-500 underline">daftar</a></p>
  </form>

</body>
</html>
