<?php

require 'php/functions.php';

// Melakukan Query
$menu = query("SELECT * FROM menu");

if (isset($_POST["cari"])) {
  $menu = cari($_POST["keyword"]);
}

$brownies = pickRandom("Brownies");
$ketan = pickRandom("Ketan");
$bika = pickRandom("Bika");
$wingko = pickRandom("Wingko");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CateringSBY.</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- link font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- link css -->
  <link rel="stylesheet" href="css/rev6.css">

</head>

<body>

  <!-- awal header -->

  <header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>CateringSBY.</a>

    <nav class="navbar">
      <a class="active" href="#home">home</a>
      <a href="#category">kategori</a>
      <a href="#about">tentang kami</a>
      <a href="#popular">best seller</a>
      <!-- <a href="#order">order</a> -->
    </nav>

    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-search" id="search-icon"></i>
      <!-- <a href="#" class="fas fa-heart"></a> -->
      <a href="php/login.php" class="fas fa-user"></a>
    </div>

  </header>

  <!-- akhir header -->

  <!-- kolom search -->

  <form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
  </form>

  <!-- akhir kolom search -->

  <!-- awal section -->

  <section class="home" id="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper wrapper">

        <div class="swiper-slide slide">
          <div class="content">
            <span>menu spesial kami</span>
            <h3>spicy noodles</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore harum corporis nulla.</p>
            <a href="#" class="btn">Pesan Sekarang</a>
          </div>
          <div class="image">
            <img src="images/home-img-1.png" alt="">
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>menu spesial kami</span>
            <h3>fried chicken</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore harum corporis nulla.</p>
            <a href="#" class="btn">Pesan Sekarang</a>
          </div>
          <div class="image">
            <img src="images/home-img-2.png" alt="">
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>menu spesial kami</span>
            <h3>hot pizza</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore harum corporis nulla.</p>
            <a href="#" class="btn">Pesan Sekarang</a>
          </div>
          <div class="image">
            <img src="images/home-img-3.png" alt="">
          </div>
        </div>


      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>

  <!-- akhir section -->

  <!-- awal category -->

  <section class="category" id="category">

    <a href="#" class="box">
      <img src="images/cat-1.png" alt="">
      <h3>combo</h3>
    </a>

    <a href="#" class="box">
      <img src="images/cat-2.png" alt="">
      <h3>combo</h3>
    </a>

    <a href="#" class="box">
      <img src="images/cat-3.png" alt="">
      <h3>combo</h3>
    </a>

    <a href="#" class="box">
      <img src="images/cat-4.png" alt="">
      <h3>combo</h3>
    </a>

    <a href="#" class="box">
      <img src="images/cat-5.png" alt="">
      <h3>combo</h3>
    </a>

    <a href="#" class="box">
      <img src="images/cat-6.png" alt="">
      <h3>combo</h3>
    </a>

  </section>

  <!-- akhir category -->

  <!-- awal about section -->

  <section class="about" id="about">
    <h3 class="sub-heading"> tentang kami</h3>
    <h1 class="heading"> mengapa memilih kami?</h1>

    <div class="row">
      <div class="image">
        <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
        <h3>makanan terbaik disini</h3>
        <p>Kami menyediakan berbagai macam kue dan makanan. Untuk pemesanan kami menggunakan sistem pre-order / pesan
          terlebih dahulu(Pesan maksimal H-1).</p>
        <p>Merupakan suatu kehormatan bagi kami, bahwa produk-produk kami dapat diterima dengan baik oleh
          masyarakat.</p>
        <div class="icons-container">
          <!-- <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <span>free deliveery</span>
          </div>
          <div class="icons">
            <i class="fas fa-dollar-sign"></i>
            <span>easy payments</span>
          </div> -->
          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 service</span>
          </div>
        </div>
        <a href="#" class="btn">selengkapnya</a>
      </div>

    </div>

  </section>

  <!-- akhir about section -->



  <!-- menu populer -->

  <section class="popular" id="popular">

    <h3 class="sub-heading"> best seller</h3>
    <h1 class="heading"> menu spesial kami</h1>

    <div class="box-container">

      <div class="boxp">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $brownies['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $brownies['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $brownies['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $brownies['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="boxp">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $ketan['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $ketan['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $ketan['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $ketan['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="boxp">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $bika['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $bika['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $bika['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $bika['id'] ?>" class="btn">lihat</a>
        </div>
      </div>

      <div class="boxp">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <div class="image">
          <img src="images/<?= $wingko['gambar']; ?>" alt="">
        </div>
        <div class="content">
          <h3><?= $wingko['nama']; ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <span> (50) </span>
          </div>
          <div class="price"><?= $wingko['harga']; ?> <span>Rp65.000</span></div>
          <a href="detil.php?id=<?= $wingko['id'] ?>" class="btn">lihat</a>
        </div>
      </div>



    </div>

  </section>

  <!-- akhir menu populer -->

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









  <!-- awal back to top -->

  <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

  <!-- akhir back to top -->


  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>
</body>

</html>