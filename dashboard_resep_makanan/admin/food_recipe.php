<?php
include "inc_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "includes/header.php" ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <?php include "includes/navbar.php" ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <?php include "includes/sidebar.php" ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><b>Data Resep Makanan</b></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="add_recipe.php" class="btn btn-primary">Tambah Resep</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Resep</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // mengambil data dari tabel "recipes"
                      $query = "SELECT * FROM recipes";
                      $result = mysqli_query($koneksi, $query);

                      // menampilkan data dari tabel "recipes"
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["name"] . "</td>";
                          echo "<td style='width: 320px;'>" . $row["description"] . "</td>";
                          echo "<td><img src='uploads/" . $row["image"] . "' width=150'></td>";
                          echo "<td><a href='edit_recipe.php?id=" . $row["id"] . "'class='btn btn-warning'>Edit</a>
                                  <a href='delete_recipe.php?id=" . $row["id"] . "'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus resep ini?\")'>Hapus</a>
                                  </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><b>Data Resep Bahan Makanan</b></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="add_ingredient.php" class="btn btn-primary">Tambah Bahan-bahan</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Bahan-bahan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // mengambil data dari tabel "ingredients"
                      $query = "SELECT * FROM ingredients";
                      $result = mysqli_query($koneksi, $query);

                      // menampilkan data dari tabel "ingredients"
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td style='width: 730px;'>" . $row["name"] . "</td>";
                          echo "<td><a href='edit_ingredient.php?id=" . $row["id"] . "'class='btn btn-warning'>Edit</a>
                                      <a href='delete_ingredient.php?id=" . $row["id"] . "'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus bahan ini?\")'>Hapus</a>
                                  </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><b>Data Jumlah Bahan Makanan</b></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="add_recipe_ingredient.php" class="btn btn-primary">Tambah Jumlah</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Resep</th>
                        <th>ID Bahan</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // mengambil data dari tabel "recipe_ingredients"
                      $query = "SELECT * FROM recipe_ingredients";
                      $result = mysqli_query($koneksi, $query);

                      // menampilkan data dari tabel "recipe_ingredients"
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row["recipe_id"] . "</td>";
                          echo "<td>" . $row["ingredient_id"] . "</td>";
                          echo "<td>" . $row["quantity"] . "</td>";
                          echo "<td><a href='edit_recipe_ingredient.php?recipe_id=" . $row["recipe_id"] . "&ingredient_id=" . $row["ingredient_id"] . "'class='btn btn-warning'>Edit</a>
                                    <a href='delete_recipe_ingredient.php?recipe_id=" . $row["recipe_id"] . "&ingredient_id=" . $row["ingredient_id"] . "'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus resep dan bahan ini?\")'>Hapus</a>
                                </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><b>Data Instruksi Resep Makanan</b></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="add_instruction.php" class="btn btn-primary">Tambah Instruksi</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example4" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <tr>
                        <th>ID</th>
                        <th>ID Resep</th>
                        <th>Instruksi</th>
                        <th>Aksi</th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // mengambil data dari tabel "instructions"
                      $query = "SELECT * FROM instructions";
                      $result = mysqli_query($koneksi, $query);

                      // menampilkan data dari tabel "instructions"
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["recipe_id"] . "</td>";
                          echo "<td style='width: 600px;'>" . $row["instruction"] . "</td>";
                          echo "<td><a href='edit_instruction.php?id=" . $row["id"] . "&recipe_id=" . $row["recipe_id"] . "'class='btn btn-warning'>Edit</a>
                                    <a href='delete_instruction.php?id=" . $row["id"] . "&recipe_id=" . $row["recipe_id"] . "'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus instruksi ini?\")'>Hapus</a>
                                </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
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
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example3').DataTable({}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example4').DataTable({}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>