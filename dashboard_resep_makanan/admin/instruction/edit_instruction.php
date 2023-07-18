<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}

require '../inc_connection.php';
require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];
$recipe_id = $_GET["recipe_id"];

// Query data resep makanan berdasarkan id
$instruksi = query("SELECT * FROM instructions WHERE id = $id AND recipe_id = $recipe_id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Bahan-bahan berhasil diubah!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Bahan-bahan gagal diubah!');
                document.location.href = '../index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Instruksi</title>
</head>
<body>
	<h1>Edit Instruksi</h1>

	<form action="" method="POST">

		<input type="hidden" name="id" value="<?php echo $instruksi['id']; ?>">
        <input type="hidden" name="recipe_id" value="<?php echo $instruksi['recipe_id']; ?>">

		<label for="instruction">Instruksi: </label><br>
        <textarea name="instruction" cols="40" rows="10"><?php echo $instruksi['instruction']; ?></textarea><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>
