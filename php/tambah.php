<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek keberhasilan data
  if (tambah($_POST) > 0) {
    echo "
      <script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'admin.php';
      </script>
  ";
  } else {
    echo "
      <script>
          alert('data gagal ditambahkan!');
          document.location.href = 'admin.php';
      </script>
  ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>

  <h1>Tambah data menu</h1>

  <form action="" method="post">
    <ul>

      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <br>
      <li>
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga" required>
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>

  </form>

</body>

</html>