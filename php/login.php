<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: admin.php");
  exit;
}



if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // cek session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie

        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: admin.php");
      exit;
    }
  }

  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="../css/log1.css">
  <title>Halaman Login</title>
</head>

<body>

  <h1>Halaman Login</h1>

  <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
  <?php endif; ?>

  <header>

    <a href="../index.php" class="logo"><i class="fas fa-arrow-left"></i></a>

  </header>

  <div class="container">

    <h1>Login</h1>

    <form action="" method="post">

      <label for="username">Username</label><br>
      <input type="text" name="username" id="username"><br>

      <label for="password">Password</label><br>
      <input type="password" name="password" id="password"><br><br>

      <div class="me">
        <input class="me" type="checkbox" name="remember" id="remember">
        <label class="me" for="remember">Remember me</label>
      </div><br><br>

      <br>
      <button type="submit" name="login">Login</button>


    </form>
  </div>

</body>

</html>