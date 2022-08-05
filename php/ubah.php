<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data menu berdasarkan id
$mn = query("SELECT * FROM menu WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek keberhasilan data
  if (ubah($_POST) > 0) {
    echo "
      <script>
          alert('data berhasil diubah!');
          document.location.href = 'admin.php';
      </script>
  ";
  } else {
    echo "
      <script>
          alert('data gagal diubah!');
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
  <title>Ubah Data</title>
</head>

<body>

  <h1>Ubah data menu</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mn["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mn["gambar"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $mn["nama"]; ?>">
      </li>
      <br>
      <li>
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga" required value="<?= $mn["harga"]; ?>">
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label><br>
        <img src="../images/<?= $mn["gambar"]; ?>" width="40"><br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>

  </form>

</body>

</html>