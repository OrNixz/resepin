<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}
 
require '../inc_connection.php';
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Jumlah berhasil ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Jumlah gagal ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Jumlah</title>
</head>
<body>
	<h1>Tambah Jumlah</h1>
	<form action="" method="POST">
		<label>ID Resep</label><br>
		<input type="text" name="recipe_id"><br><br>

		<label>ID Bahan</label><br>
		<input type="text" name="ingredient_id"><br><br>

        <label>Jumlah</label><br>
		<input type="text" name="quantity"><br><br>

		<button type="submit" name="submit">Tambah Jumlah</button>
	</form>
</body>
</html>
