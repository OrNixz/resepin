<?php
require "functions.php";
  if(!isset($_GET["id"])){
    header("Location:receipe-post.php");

  }
  $id = $_GET["id"];
  $dashboard = query("SELECT * FROM recipes")[$id];
  $ingredients = query("SELECT * FROM ingredients");
  $instructions = query("SELECT * FROM instructions");
  $recipes = query("SELECT * FROM recipe_ingredients");
  $bahan = explode("bahan", $ingredients[$id]["name"]);
  $jumlahBahan = count($bahan);
  $langkah = explode("langkah", $instructions[$id]["instruction"]);
  $jumlahLangkah = count($langkah);
  $img=$dashboard["image"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Resepin | Recipe Post</title>

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
            <a class="nav-brand" href="index.html"><img src="assets/Resepin-logos_black.png" width="144" height="65" alt="" /></a>

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
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a href="receipe-post.php">Recipes</li>
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

  <!-- ##### Breadcumb Area Start ##### -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(assets/recipes/<?= $dashboard["image"]?>)">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcumb-text text-center">
            <h2>Resep Makanan</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Breadcumb Area End ##### -->

  <div class="receipe-post-area section-padding-80">
    <!-- Receipe Post Search -->
    <div class="receipe-post-search mb-80">
      <div class="container">
        <form action="#" method="post">
          <div class="row">
            <div class="col-12 col-lg-3">
              <select name="select1" id="select1">
                <option value="1">All Receipies Categories</option>
                <option value="1">All Receipies Categories 2</option>
                <option value="1">All Receipies Categories 3</option>
                <option value="1">All Receipies Categories 4</option>
                <option value="1">All Receipies Categories 5</option>
              </select>
            </div>
            <div class="col-12 col-lg-3">
              <select name="select1" id="select2">
                <option value="1">All Receipies Categories</option>
                <option value="1">All Receipies Categories 2</option>
                <option value="1">All Receipies Categories 3</option>
                <option value="1">All Receipies Categories 4</option>
                <option value="1">All Receipies Categories 5</option>
              </select>
            </div>
            <div class="col-12 col-lg-3">
              <input type="search" name="search" placeholder="Search Receipies" />
            </div>
            <div class="col-12 col-lg-3 text-right">
              <button type="submit" class="btn delicious-btn">Search</button>
            </div>
            <div class="col-12 col-lg-3" style="margin-top: 20px;">
              <button type="submit" class="btn delicious-btn"> <a href="receipe-post.php">Kembali ke Semua Menu</a>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Receipe Slider -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="receipe-slider owl-carousel">
            <img 
              src="assets/<?= $dashboard["image"] ?>" 
              alt="" 
              style="width: auto; height: 30%; border-radius: 10px;" 
              class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>

    <!-- Receipe Content Area -->
    <div class="receipe-content-area">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="receipe-headline my-5">
              <h2><?= $dashboard["name"] ?></h2>

              <img src="assets/recipes/<?= $img ?>" width=1000px height=500px style="margin-bottom:20px;">
              <div class="receipe-duration">
                <h6>Jumlah Langkah: <?= $jumlahLangkah ?></h6>
                <h6>Jumlah Bahan: <?= $jumlahBahan ?></h6>
              </div><br><br>
              <h4>Langkah-langkah</h4>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="receipe-ratings text-right my-5">
              <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <a href="#" class="btn delicious-btn">For Begginers</a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-8">
            <?php for ($i = 0; $i < $jumlahLangkah; $i++) : ?>
              <div class="single-preparation-step d-flex">
                <h4><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>.</h4>
                <p>
                  <?= $langkah["$i"] ?>
                </p>
              </div>
            <?php endfor; ?>
          </div>


          <!-- Ingredients -->
          <div class="col-12 col-lg-4">
            <div class="ingredients">
              <h4>Bahan-bahan</h4>

              <?php for ($i = 0; $i < $jumlahBahan; $i++) : ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck<?= $i + 1 ?>" />
                  <label class="custom-control-label" for="customCheck<?= $i + 1 ?>"><?= $bahan["$i"] ?></label>
                </div>
              <?php endfor; ?>

            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <div class="section-heading text-left">
              <h3>Leave a comment</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="contact-form-area">
              <form action="#" method="post">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <input type="text" class="form-control" id="name" placeholder="Name" />
                  </div>
                  <div class="col-12 col-lg-6">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" />
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                  </div>
                  <div class="col-12">
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn delicious-btn mt-30" type="submit">
                      Post Comments
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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