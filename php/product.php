<?php

require 'functions.php';

$menu  = query("SELECT * FROM menu");

// if (!isset($_GET['search'])) {
//   $text = "Beragam produk terbaik ada di sini";
//   $items = query("SELECT * FROM furniture_items");
// } else if (isset($_GET['search'])) {
//   $items = cari($_GET['keyword']);
//   $text = "Beragam produk " . $_GET['keyword'] . " terbaik ada di sini";
//   if (empty($items)) {
//     $text = "Produk " . $_GET['keyword'] . " tidak dapat ditemukan disini.";
//     $items = query("SELECT * FROM furniture_items");
//   }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- link font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- link css -->
  <link rel="stylesheet" href="../css/prrev.css">

</head>

<body>

  <!-- awal header -->

  <header>

    <a href="../index.php" class="logo"><i class="fas fa-arrow-left"></i></a>

    <form action="" method="POST" id="search-form">
      <input type="text" placeholder="search here..." name="keyword" id="search-box">
      <label type="submit" name="cari" for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <a href="login.php" class="fas fa-user"></a>
    </div>

  </header> -->

  <!-- akhir header -->

  <!-- awal more -->

  <section class="popular">

    <!-- <h2 class="sub-heading"> produk lainnya</h2> -->

    <div class="box-container">

      <?php foreach ($menu as $mn) : ?>

        <div class="box">
          <!-- <a href="#" class="fas fa-heart"></a> -->
          <div class="image">
            <img src="../images/<?= $mn['gambar']; ?>" alt="">
          </div>
          <div class="content">
            <h3><?= $mn['nama']; ?></h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half"></i>
              <span> (50) </span>
            </div>
            <div class="price"><?= $mn['harga']; ?> <span>Rp65.000</span></div>
            <a href="../detil.php?id=<?= $mn['id'] ?>" class="btn">lihat</a>
          </div>
        </div>

      <?php endforeach; ?>

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

</body>

</html>