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
$resep = query("SELECT * FROM recipes WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Resep makanan berhasil diubah!');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo " 
            <script>
                alert('Resep makanan gagal diubah!');
                document.location.href = '../index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Resep Makanan</title>
</head>
<body>
	<h1>Edit Resep Makanan</h1>

	<form action="" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $resep['id']; ?>">
		<input type="hidden" name="oldImage" value="<?php echo $resep['image']; ?>">

		<label for="name">Nama Resep Makanan:</label><br>
		<input type="text" name="name" value="<?php echo $resep['name']; ?>"><br><br>
		
		<label for="description">Deskripsi Resep Makanan:</label><br>
		<textarea name="description"><?php echo $resep['description']; ?></textarea><br><br>
		
		<label for="image">Gambar:</label><br>
		<img src="../uploads/<?php echo $resep['image']; ?>" width="150"><br><br>
		<input type="file" name="image"><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>
