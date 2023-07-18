<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

include "inc_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Resep Makanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<a href="logout.php">Logout</a>

    <h1>Data Resep Makanan</h1>

        <h2>Resep</h2>
        <a href="recipe/add_recipe.php">Tambah Resep</a>
        <table>
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
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "<td><img src='uploads/" . $row["image"] . "' width='150'></td>";
                        echo "<td><a href='recipe/edit_recipe.php?id=" . $row["id"] . "'>Edit</a> | 
                              <a href='recipe/delete_recipe.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus resep ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                }
                ?>

            </tbody>
        </table>
        
        <h2>Bahan</h2>
        <a href="ingredient/add_ingredient.php">Tambah Bahan-bahan</a>
        <table>
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
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td><a href='ingredient/edit_ingredient.php?id=" . $row["id"] . "'>Edit</a> | 
                                  <a href='ingredient/delete_ingredient.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus bahan ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
                }
                ?>

            </tbody>
        </table>
    
    <h2>Resep dan Bahan</h2>
    <a href="recipe_ingredient/add_recipe_ingredient.php">Tambah Resep dan Bahan</a>
    <table>
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
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["recipe_id"] . "</td>";
                    echo "<td>" . $row["ingredient_id"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td><a href='recipe_ingredient/edit_recipe_ingredient.php?recipe_id=" . $row["recipe_id"] . "&ingredient_id=" . $row["ingredient_id"] . "'>Edit</a> | 
                              <a href='recipe_ingredient/delete_recipe_ingredient.php?recipe_id=" . $row["recipe_id"] . "&ingredient_id=" . $row["ingredient_id"] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus resep dan bahan ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                } else {
                echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
                }
            ?>
        </tbody>
    </table>
    
    <h2>Instruksi</h2>
    <a href="instruction/add_instruction.php">Tambah Instruksi</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Resep</th>
                <th>Instruksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            // mengambil data dari tabel "instructions"
            $query = "SELECT * FROM instructions";
            $result = mysqli_query($koneksi, $query);

            // menampilkan data dari tabel "instructions"
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["recipe_id"] . "</td>";
                    echo "<td>" . $row["instruction"] . "</td>";
                    echo "<td><a href='instruction/edit_instruction.php?id=" . $row["id"] . "&recipe_id=" . $row["recipe_id"] ."'>Edit</a> | 
                              <a href='instruction/delete_instruction.php?id=" . $row["id"] . "&recipe_id=" . $row["recipe_id"] ."' onclick='return confirm(\"Apakah anda yakin ingin menghapus instruksi ini?\")'>Hapus
                              </a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>