<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cateringsby");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $gambar = htmlspecialchars($data["gambar"]);
  $nama = htmlspecialchars($data["nama"]);
  $harga = htmlspecialchars($data["harga"]);

  $query = "INSERT INTO menu
              VALUES
            ('', '$gambar', '$nama', '$harga')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM menu WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;
  $id = $data["id"];
  $gambar = htmlspecialchars($data["gambar"]);
  $nama = htmlspecialchars($data["nama"]);
  $harga = htmlspecialchars($data["harga"]);

  $query = "UPDATE menu SET
              gambar = '$gambar',
              nama = '$nama',
              harga = '$harga'
            WHERE id = $id
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
