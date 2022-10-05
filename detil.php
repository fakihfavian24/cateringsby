<?php

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

require 'php/functions.php';

// ambil data di URL
$id = $_GET["id"];

// Melakukan Query
$mn = query("SELECT * FROM menu WHERE id = $id")[0];

$bolu = pickRandom("Bolu");
$sarang = pickRandom("Sarang");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Detil</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- link font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- link css -->
  <link rel="stylesheet" href="css/detil12.css">

</head>

<body>

  <!-- awal header -->

  <header>

    <a href="index.php" class="logo"><i class="fas fa-arrow-left"></i></a>

    <form action="php/product.php" method="get" id="search-form">
      <input type="text" placeholder="search here..." name="keyword" id="search-box">
      <label type="submit" name="cari" for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <a href="php/login.php" class="fas fa-user"></a>
    </div>

  </header>

  <!-- akhir header -->

  <!-- awal section -->

  <section class="home">

    <div class="image">
      <img src="images/<?= $mn["gambar"]; ?>" alt="">
    </div>

    <div class="content">
      <h3><?= $mn["nama"]; ?></h3>
      <ul>
        <li>Ukuran 25cm</li>
        <li>Filling cherry</li>
        <li>Free lilin & pisau</li>
        <li>Packaging box</li>
      </ul>
      <h4><?= $mn["harga"]; ?></h4>
      <br><br>
      <br><br>
    </div>

  </section>

  <!-- akhir section -->

  <!-- awal more -->

  <section class="popular">

    <h2 class="sub-heading"> produk lainnya</h2>

    <div class="box-container">

      <div class="box">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $bolu['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $bolu['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $bolu['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $bolu['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="box">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $sarang['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $sarang['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $sarang['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $sarang['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="box">

        <div class="image">
          <img src="images/dish-3.png" alt="">
        </div>
        <div class="content">
          <h3>delicious food</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price">Rp50.000 <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $mn['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="box">

        <div class="image">
          <img src="images/dish-4.png" alt="">
        </div>
        <div class="content">
          <h3>delicious food</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price">Rp50.000 <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $mn['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

    </div>

  </section>

  <!-- akhir more -->

  <!-- awal footer -->

  <section class="footer">

    <div class="box-containers">

      <div class="kotak">
        <h3>locations</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> indonesia</a>
        <!-- <a href="#"> <i class="fas fa-map-marker-alt"></i> talao, kec sangir balai janggo, kab solok selatan, sumatera
          barat</a> -->
      </div>

      <div class="kotak">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> about</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> popular</a>
      </div>

      <div class="kotak">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +62 821 2222 4444</a>
        <a href="#"> <i class="fas fa-envelope"></i> cateringsby@gmail.com</a>
        <a href="#"> <i class="fas fa-envelope"></i> catering@gmail.com</a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> padang, indonesia - 27777</a>
      </div>

      <div class="kotak">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
      </div>

    </div>

    <div class="credit"> copyright @ 2022 by <span>CateringSBY.</span> </div>

  </section>

  <!-- akhir footer -->

  </header>

  <script src="js/script.js"></script>

</body>

</html>