<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Resepin | Homepage</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico" />

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <i class="circle-preloader"></i>
    <img src="img/core-img/salad.png" alt="" />
  </div>

  <!-- Search Wrapper -->
  <div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="#" method="post">
            <input type="search" name="search" placeholder="Type any keywords..." />
            <button type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-between">
          <!-- Breaking News -->
          <div class="col-12 col-sm-6">
            <div class="breaking-news">
              <div id="breakingNewsTicker" class="ticker">
                <ul>
                  <li><a href="#">Hello World!</a></li>
                  <li><a href="#">Welcome to Resepin Website</a></li>
                  <li><a href="#">Find your favorite recipe in here!</a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Top Social Info -->
          <div class="col-12 col-sm-6">
            <div class="top-social-info text-right">
              <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="delicious-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="deliciousNav">
            <!-- Logo -->
            <a class="nav-brand" href="index.html"><img src="./assets/Resepin-logos_black.png" alt="resepin" width="144"
                height="65" /></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">
              <!-- close btn -->
              <div class="classycloseIcon">
                <div class="cross-wrap">
                  <span class="top"></span><span class="bottom"></span>
                </div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="receipe-post1.php">Recipes</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="about.php">About Us</a></li>
                </ul>

                <!-- Newsletter Form -->
                <div class="search-btn">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
              </div>
              <!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <section class="hero-area">
    <div class="hero-slides owl-carousel">
      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(assets/recipes/ayam_betutu.jpg)">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="300ms">
                  Ayam Betutu
                </h2>
                <p data-animation="fadeInUp" data-delay="700ms">
                  Ayam Betutu adalah hidangan khas Bali yang terdiri dari ayam
                  yang diisi dengan bumbu rempah-rempah tradisional Bali,
                  kemudian dibungkus dengan daun pisang dan dipanggang dalam
                  api arang hingga matang. Hidangan ini biasanya disajikan
                  dengan nasi putih dan sambal matah, dan memiliki rasa yang
                  kaya dan bumbu yang kuat. Ayam Betutu merupakan salah satu
                  hidangan khas Bali yang paling terkenal dan banyak dicari
                  oleh wisatawan yang berkunjung ke pulau Bali.
                </p>
                <a 
                  href="receipe-post1.php?id=4" 
                  class="btn delicious-btn" 
                  data-animation="fadeInUp" 
                  data-delay="1000ms">Lihat Resep</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(assets/recipes/bandeng.JPG)">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="300ms">
                  Bandeng Crispy Bumbu Rujak
                </h2>
                <p data-animation="fadeInUp" data-delay="700ms">
                  Bandeng Crispy Bumbu Rujak adalah hidangan laut yang terbuat
                  dari ikan bandeng yang digoreng dengan tepung hingga renyah
                  dan kering. Kemudian, ikan bandeng ini dicampur dengan bumbu
                  rujak tradisional yang terdiri dari cabai, kacang tanah,
                  gula merah, asam jawa, dan bawang putih yang dihaluskan.
                  Hidangan ini biasanya disajikan dengan lalapan seperti daun
                  kemangi, mentimun, dan tomat. Bandeng Crispy Bumbu Rujak
                  merupakan hidangan yang berasal dari daerah Jawa Tengah,
                  terutama di kota Semarang. Hidangan ini memiliki rasa yang
                  unik dengan kombinasi rasa pedas, manis, dan asam yang cocok
                  dinikmati sebagai lauk atau cemilan.
                </p>
                <a 
                  href="receipe-post1.php?id=2" 
                  class="btn delicious-btn" 
                  data-animation="fadeInUp" 
                  data-delay="1000ms">Lihat Resep</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(assets/recipes/gudeg.JPG)">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="300ms">
                  Gudeg Jogja
                </h2>
                <p data-animation="fadeInUp" data-delay="700ms">
                  Gudeg Jogja adalah hidangan khas Yogyakarta yang terbuat
                  dari nangka muda yang dimasak dengan santan, rempah-rempah,
                  dan gula merah dalam waktu yang lama hingga menjadi empuk
                  dan berwarna coklat kehitaman. Hidangan ini biasanya
                  disajikan dengan nasi, telur, ayam atau krecek, dan sambal
                  goreng krecek. Gudeg Jogja memiliki cita rasa yang manis dan
                  gurih, dan menjadi salah satu hidangan ikonik yang paling
                  terkenal dari kota Yogyakarta. Hidangan ini sering
                  dihidangkan di rumah makan dan warung-warung di sekitar kota
                  Yogyakarta dan menjadi salah satu kuliner yang menjadi daya
                  tarik wisatawan yang berkunjung ke kota tersebut.
                </p>
                <a
                  href="receipe-post1.php?id=1" 
                  class="btn delicious-btn" 
                  data-animation="fadeInUp" 
                  data-delay="1000ms">Lihat Resep</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(assets/recipes/opor_ayam.JPG)">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="300ms">
                  Opor Ayam Lebaran
                </h2>
                <p data-animation="fadeInUp" data-delay="700ms">
                  Opor Ayam Lebaran adalah hidangan khas Indonesia yang biasa disajikan saat perayaan Hari Raya Idul
                  Fitri. Hidangan ini terbuat dari ayam yang dimasak dalam kuah santan yang kaya rempah seperti
                  ketumbar, kunyit, jahe, dan lengkuas. Kuah santan tersebut kemudian diberi tambahan bumbu seperti
                  serai, daun salam, daun jeruk, dan bawang merah. Hidangan ini biasanya disajikan dengan ketupat, nasi
                  putih, atau lontong, serta ditambahkan pelengkap seperti telur rebus, kentang, dan tahu. Opor Ayam
                  Lebaran memiliki cita rasa yang kaya dan lezat, serta menjadi salah satu hidangan tradisional yang
                  paling populer di Indonesia pada saat perayaan Idul Fitri.
                </p>
                <a 
                  href="receipe-post1.php?id=0" 
                  class="btn delicious-btn" 
                  data-animation="fadeInUp" 
                  data-delay="1000ms">Lihat Resep</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(assets/recipes/cookies.JPG)">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                <h2 data-animation="fadeInUp" data-delay="300ms">
                  Cookies Choco Chip
                </h2>
                <p data-animation="fadeInUp" data-delay="700ms">
                  Cookies Choco Chip adalah kue kering yang terbuat dari adonan dasar tepung terigu, gula, mentega, dan
                  telur yang dicampur dengan potongan cokelat chip kecil-kecil. Kue ini biasanya dipanggang dalam oven
                  hingga matang dan memiliki tekstur yang renyah di luar, namun lembut dan kenyal di dalamnya. Cookies
                  Choco Chip seringkali dijadikan sebagai camilan atau hidangan penutup yang populer, dan menjadi salah
                  satu jenis kue kering yang paling banyak disukai di seluruh dunia. Hidangan ini mudah ditemukan di
                  toko kue, supermarket, ataupun dapat dibuat sendiri di rumah dengan mudah karena bahan-bahannya mudah
                  didapatkan.
                </p>
                <a 
                  href="receipe-post1.php?id=3" 
                  class="btn delicious-btn" 
                  data-animation="fadeInUp" 
                  data-delay="1000ms">Lihat Resep</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Top Catagory Area Start ##### -->
  <section class="top-catagory-area section-padding-80-0">
    <div class="container">
      <div class="row">
        <!-- Top Catagory Area -->
        <div class="col-12 col-lg-6">
          <div class="single-top-catagory">
            <img src="assets/recipes/cookies.JPG" alt="" />
            <!-- Content -->
            <div class="top-cta-content">
              <h3>Cookies Choco Chip</h3>
              <h6>Simpel &amp; Manis</h6>
              <a href="receipe-post1.php?id=3" class="btn delicious-btn">Lihat Resep</a>
            </div>
          </div>
        </div>
        <!-- Top Catagory Area -->
        <div class="col-12 col-lg-6">
          <div class="single-top-catagory">
            <img src="assets/recipes/opor_ayam.JPG" alt="" />
            <!-- Content -->
            <div class="top-cta-content">
              <h3>Opor Ayam Lebaran</h3>
              <h6>Gurih &amp; Enak</h6>
              <a href="receipe-post1.php?id=0" class="btn delicious-btn">Lihat Resep</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Top Catagory Area End ##### -->

  <!-- ##### Best Receipe Area Start ##### -->
  <section class="best-receipe-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading">
            <h3>Resep Terbaik Kita</h3>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Best Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-best-receipe-area mb-30">
            <img src="assets/recipes/gudeg.JPG" alt="" />
            <div class="receipe-content">
              <a href="receipe-post.php?id=1">
                <h5>Gudeg Jogja</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Best Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-best-receipe-area mb-30">
            <img src="assets/recipes/bandeng.JPG" alt="" />
            <div class="receipe-content">
              <a href="receipe-post.php?od=2">
                <h5>Bandeng Crispy Bumbu Rujak</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Best Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-best-receipe-area mb-30">
            <img src="assets/recipes/cookies.JPG" alt="" />
            <div class="receipe-content">
              <a href="receipe-post.php?id=3">
                <h5>Cookies Choco Chip</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Best Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-best-receipe-area mb-30">
            <img src="assets/recipes/ayam_betutu.jpg" alt="" />
            <div class="receipe-content">
              <a href="receipe-post.php?id=4">
                <h5>Ayam Betutu</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Best Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-best-receipe-area mb-30">
            <img src="assets/recipes/opor_ayam.JPG" alt="" />
            <div class="receipe-content">
              <a href="receipe-post.php?id=0">
                <h5>Opor Ayam Lebaran</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Best Receipe Area End ##### -->

  <!-- ##### CTA Area Start ##### -->
  <section class="cta-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg4.jpg)">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <!-- Cta Content -->
          <div class="cta-content text-center">
            <h2>Website Resepin</h2>
            <p>
              Website yang menyediakan resep hampir berbagai jenis makanan
              secara gratis
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### CTA Area End ##### -->

  <!-- ##### Small Receipe Area Start ##### -->
  <section class="small-receipe-area section-padding-80-0">
    <div class="container">
      <div class="row">
        <!-- Small Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-small-receipe-area d-flex">
            <!-- Receipe Thumb -->
            <div class="receipe-thumb">
              <img src="assets/recipes/gudeg.JPG" alt="" />
            </div>
            <!-- Receipe Content -->
            <div class="receipe-content">
              <span>January 04, 2023</span>
              <a href="receipe-post.php?id=1">
                <h5>Gudeg Jogja</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>10 Comments</p>
            </div>
          </div>
        </div>

        <!-- Small Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-small-receipe-area d-flex">
            <!-- Receipe Thumb -->
            <div class="receipe-thumb">
              <img src="assets/recipes/cookies.JPG" alt="" />
            </div>
            <!-- Receipe Content -->
            <div class="receipe-content">
              <span>February 04, 2023</span>
              <a href="receipe-post.php?id=3">
                <h5>Cookies Choco Chip</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>15 Comments</p>
            </div>
          </div>
        </div>

        <!-- Small Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-small-receipe-area d-flex">
            <!-- Receipe Thumb -->
            <div class="receipe-thumb">
              <img src="assets/recipes/opor_ayam.JPG" alt="" />
            </div>
            <!-- Receipe Content -->
            <div class="receipe-content">
              <span>January 25, 2023</span>
              <a href="receipe-post.php?id=0">
                <h5>Opor Ayam Lebaran</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>18 Comments</p>
            </div>
          </div>
        </div>

        <!-- Small Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-small-receipe-area d-flex">
            <!-- Receipe Thumb -->
            <div class="receipe-thumb">
              <img src="assets/recipes/ayam_betutu.jpg" alt="" />
            </div>
            <!-- Receipe Content -->
            <div class="receipe-content">
              <span>January 31, 2023</span>
              <a href="receipe-post.php?id=4">
                <h5>Ayam Betutu</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>25 Comments</p>
            </div>
          </div>
        </div>

        <!-- Small Receipe Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-small-receipe-area d-flex">
            <!-- Receipe Thumb -->
            <div class="receipe-thumb">
              <img src="assets/recipes/bandeng.JPG" alt="" />
            </div>
            <!-- Receipe Content -->
            <div class="receipe-content">
              <span>January 20, 2023</span>
              <a href="receipe-post.php?id=2">
                <h5>Bandeng Crispy Bumbu Rujak</h5>
              </a>
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>2 Comments</p>
            </div>
          </div>
        </div>
  </section>
  <!-- ##### Small Receipe Area End ##### -->

  <!-- ##### Quote Subscribe Area Start ##### -->
  <section class="quote-subscribe-adds">
    <div class="container">
      <div class="row align-items-end">

        <!-- Newsletter -->
        <div class="container">
          <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 col-lg-4">
              <div class="newsletter-area text-center">
                <h4>Subscribe to our newsletter</h4>
                <!-- Form -->
                <div class="newsletter-form bg-img bg-overlay"
                  style="background-image: url(assets/recipes/bandeng.JPG)">
                  <form action="#" method="post">
                    <input type="email" name="email" placeholder="Subscribe to newsletter" />
                    <button type="submit" class="btn delicious-btn w-100">
                      Subscribe
                    </button>
                  </form>
                  <p>
                    Untuk mendapatkan pemberitahuan atau informasi dari kami silahkan berlangganan dengan menekan tombol
                    subscribe
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
          <!-- Footer Social Info -->
          <div class="footer-social-info text-right">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <!-- Footer Logo -->
          <div class="footer-logo">
            <a href="index.html"><img src="assets/Resepin-logos_black.png" width="144" height="65" alt="" /></a>
          </div>
          <!-- Copywrite -->
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved
            <i aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Kelompok 4</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area Start ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>