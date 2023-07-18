<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}

require '../inc_connection.php';
require 'functions.php';

// Ambil data di URL
$recipe_id = $_GET["recipe_id"];
$ingredient_id = $_GET["ingredient_id"];

// Query data resep makanan berdasarkan id
$jumlah = query("SELECT * FROM recipe_ingredients WHERE recipe_id = $recipe_id AND ingredient_id = $ingredient_id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Jumlah berhasil diubah!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Jumlah gagal diubah!');
                document.location.href = '../index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Jumlah</title>
</head>
<body>
	<h1>Edit Jumlah</h1>

	<form action="" method="POST">

		<input type="hidden" name="recipe_id" value="<?php echo $jumlah['recipe_id']; ?>">
        <input type="hidden" name="ingredient_id" value="<?php echo $jumlah['ingredient_id']; ?>">

		<label for="name">Jumlah:</label><br>
		<input type="text" name="quantity" value="<?php echo $jumlah['quantity']; ?>"><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>
