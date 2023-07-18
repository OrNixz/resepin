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
                alert('Instruksi berhasil ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Instruksi gagal ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Instruksi</title>
</head>
<body>
	<h1>Tambah Instruksi</h1>
	<form action="" method="POST">
		<label>ID</label><br>
		<input type="text" name="id"><br><br>

        <label>ID Resep</label><br>
		<input type="text" name="recipe_id"><br><br>

		<label>Instruksi</label><br>
		<textarea name="instruction" cols="40" rows="10"></textarea><br><br>

		<button type="submit" name="submit">Tambah Instruksi</button>
	</form>
</body>
</html>
