<?php
require "functions.php";
if(isset($_GET["id"])){
  $cek=$_GET["id"];
  header("Location:receipe-post1.php?id=$cek");
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Resepin - Food Receipe | Receipe </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />

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
              <input
                type="search"
                name="search"
                placeholder="Type any keywords..."
              />
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
                <a href="#"
                  ><i class="fa fa-pinterest" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-dribbble" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
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
            <nav
              class="classy-navbar justify-content-between"
              id="deliciousNav"
            >
              <!-- Logo -->
              <a class="nav-brand" href="index.php"
                ><img src="assets/Resepin-logos_black.png" width="144" height="65" alt=""
              /></a>

              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
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
                    <li ><a href="index.php">Home</a></li>
                    </li>
                    <li class="active"><a href="receipe-post.php">Recipes</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About us</a></li>
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
    <div
      class="breadcumb-area bg-img bg-overlay"
      style="background-image: url(img/bg-img/breadcumb3.jpg)"
    >
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
                <input
                  type="search"
                  name="search"
                  placeholder="Search Receipies"
                />
              </div>
              <div class="col-12 col-lg-3 text-right">
                <button type="submit" class="btn delicious-btn">Search</button>
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
              <img src="img/bg-img/bg5.jpg" alt="" />
              <img src="img/bg-img/bg5.jpg" alt="" />
              <img src="img/bg-img/bg5.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
     
      <main class="page">
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <div></div>
          <div></div>
          <p></p>
          <p></p>
          <h4>recipes</h4>
          <div class="tags-list">
            <a href="#">Makanan Tradisional</a>
            <a href="#">Makanan Penutup </a>
            <a href="#">Makanan laut </a>
            <a href="#">Makanan Berkuah </a>
            <a href="#">Hidangan Utama </a>
          </div>
        </div>
        <!-- end of tag container -->
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="receipe-post1.php?id=0" class="recipe">
            <img
              src="./assets/recipes/opor_ayam.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>opor ayam lebaran</h5>
            <p>Lama Waktu: 45 menit | Porsi : 6 orang</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="receipe-post1.php?id=1" class="recipe">
            <img
              src="./assets/recipes/gudeg.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>gudeg jogja</h5>
            <p>Lama Waktu: 90 menit | Porsi : 1 orang</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="receipe-post1.php?id=2" class="recipe">
            <img
              src="./assets/recipes/bandeng.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>bandeng crispy bumbu rujak</h5>
            <p>Lama Waktu: 45 menit | Porsi : 5 orang</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="receipe-post1.php?id=3" class="recipe">
            <img
              src="./assets/recipes/cookies.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>cookies choco chip</h5>
            <p>Lama Waktu: 10-15 menit | Porsi : 2 orang</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="receipe-post1.php?id=4" class="recipe">
            <img
              src="./assets/recipes/ayam_betutu.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>ayam betutu</h5>
            <p>Lama Waktu: 180 menit | Porsi : 4 orang</p>
          </a>
          <!-- end of single recipe -->
        </div>
        <!-- end of recipes list -->
    </main>
    <!-- end of main -->
    <!-- ##### Follow Us Instagram Area End ##### -->

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
