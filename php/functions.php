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

function cari($keyword)
{
  $query = "SELECT * FROM menu
                WHERE
                nama LIKE '%$keyword%'
                ";

  return query($query);
}

function registrasi($data)
{
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!')
          </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";

    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}
