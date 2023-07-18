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
                alert('Resep makanan berhasil ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Resep makanan gagal ditambahkan!');
                document.location.href = '../index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Bahan-bahan</title>
</head>
<body>
	<h1>Tambah Resep Makanan Baru</h1>
	<form action="" method="POST">
		<label>ID</label><br>
		<input type="text" name="id"><br><br>

		<label>Nama Bahan-bahan</label><br>
		<textarea name="name" cols="40" rows="10"></textarea><br><br>

		<button type="submit" name="submit">Tambah Bahan</button>
	</form>
</body>
</html>
