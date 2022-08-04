<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$menu  = query("SELECT * FROM menu");

if (isset($_POST["cari"])) {
  $menu = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

  <a href="logout.php">Logout</a>

  <h1>Daftar Menu</h1>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Search!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($menu as $mn) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="../images/<?= $mn["gambar"]; ?>" width="80"></td>
        <td><?= $mn["nama"]; ?></td>
        <td><?= $mn["harga"]; ?></td>
        <td>
          <a href="ubah.php?id=<?= $mn["id"]; ?>">ubah</a>
          <a href="hapus.php?id=<?= $mn["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>