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

// Query data resep makanan berdasarkan id
$bahan = query("SELECT * FROM ingredients WHERE id = $id")[0];

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
	<title>Edit Bahan-bahan</title>
</head>
<body>
	<h1>Edit Bahan-bahan</h1>

	<form action="" method="POST">

		<input type="hidden" name="id" value="<?php echo $bahan['id']; ?>">

		<label for="name">Nama Bahan-bahan:</label><br>
        <textarea name="name" cols="40" rows="10"><?php echo $bahan['name']; ?></textarea><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>
