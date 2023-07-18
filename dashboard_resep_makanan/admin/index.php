<?php
include "inc_connection.php";
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "includes/header.php" ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <?php include "includes/navbar.php" ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include "includes/sidebar.php" ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>5</h3>

                  <p>Recipes</p>
                </div>
                <div class="icon">
                  <i class="icon fas fa-hamburger"></i>
                </div>
                <a href="food_recipe.php" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>5</h3>

                  <p>Ingredients</p>
                </div>
                <div class="icon">
                  <i class="icon fas fa-leaf"></i>
                </div>
                <a href="food_recipe.php" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>5</h3>

                  <p>Recipe Ingredients</p>
                </div>
                <div class="icon">
                  <i class="icon fas fa-shopping-basket"></i>
                </div>
                <a href="food_recipe.php" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>5</h3>

                  <p>Instructions</p>
                </div>
                <div class="icon">
                  <i class="icon fas fa-list"></i>
                </div>
                <a href="food_recipe.php" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <h3 class="mb-4 mt-3 sm-6">Top choices</h3>
          <div class="card card-success">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="assets/opor ayam.jpg">
                  </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="assets/bandeng.jpg">
                  </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="assets/cookies.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h3 class="mb-4 mt-3 sm-6" id="faq">Frequently Asked Questions (FAQ)</h3>
          <section class="content">
            <div class="row">
              <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        1. What motivations to picking the theme?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                      Everything is completed fast to carry out tasks in the modern era. Each day, even when cooking. Now, cooking the same menu of foods frequently makes people feel bored. As a result, we developed a website called "Resepin" that features food recipes. There are numerous dishes available on the "Resepin" culinary recipe website food from various cultures and geographic areas, not just from the local area. Whenever you have a limited amount of time, you can simply access the recipe webpage via this website. Our meals to get cooking ideas or are merely intrigued about certain food dishes. In general, anyone can benefit much from this website. Discover delicious and original cooking recipes to try at home. Additionally, experts in the kitchen intervened to share their knowledge of the recipe with others so they may try it.
                    </div>
                  </div>
                </div>
                <div class="card card-success card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        2. What objective is this website built for?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      This website's main objective is to spread information on food recipes, preferably gained from professional chefs or from common individuals whose hobby is cooking. This website may also serve as a forum for community conversation around the sharing of simple advice and suggestions aimed at improving the presentation and flavor of prepared foods. Due to the variety of culinary recipes shared by members of the community, a pastime that wasn't originally cooking may become into one if it is pursued.
                    </div>
                  </div>
                </div>
                <div class="card card-warning card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        3. What advantages does this website offer?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      - Add knowledge and expertise regarding cooking techniques from people all over the world. <br>
                      - Creating connections with other users by learning from others or exchanging recipe ideas. <br>
                      - Become a venue for promoting the brands of food ingredients whenThe website has grown significantly and is now extremely busy. <br>
                      - Can be used as a personal portfolio to be sent to professional circles in an effort to attract new clients. <br>
                    </div>
                  </div>
                </div>
                <div class="card card-danger card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        4. What features does this website provide?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      This website has a CRUD implementation, each of which can be changed according to its category, namely, recipes, ingredients, recipe_ingredients, and instructions.
                    </div>
                  </div>
                </div>
                <div class="card card-primary card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        5. Can I add an Id that already exist?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      Sadly, you cannot. Because the ID is a primary key, it must be unique.
                    </div>
                  </div>
                </div>
                <div class="card card-success card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        6. Can I sort the headings of each category from ascending to descending and vice versa?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      Yes, you can. Because we already implement it.
                    </div>
                  </div>
                </div>
                <div class="card card-warning card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        7. Is it possible to add same recipes but has different ingredients and instructions?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      It is strongly possible. Because as long as the Id is not the same, it doesn't matter.
                    </div>
                  </div>
                </div>
                <div class="card card-danger card-outline">
                  <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        8. How can I search for recipes by specific names?
                      </h4>
                    </div>
                  </a>
                  <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      You can use the search filters available on the website.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3 class="mb-4 mt-3 sm-6" id="contact-us">Contact Us</h3>
          <div class="card">
            <div class="card-body row">
              <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div class="">
                  <h2>Resepin<strong>.Inc</strong></h2>
                  <p class="lead mb-5">18319 Jamel Plains, Tangerang, 18319 Jamel Plains<br>
                    +62 867-5214-5326
                  </p>
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="inputEmail">E-Mail</label>
                  <input type="email" id="inputEmail" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="inputSubject">Subject</label>
                  <input type="text" id="inputSubject" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="inputMessage">Message</label>
                  <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Send message">
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- /.card -->

              <!-- DIRECT CHAT -->
              <!--/.direct-chat -->

              <!-- TO DO List -->
              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map card -->
              <!-- /.card -->

              <!-- solid sales graph -->
              <!-- /.card -->

              <!-- Calendar -->
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <?php include "includes/footer.php" ?>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>