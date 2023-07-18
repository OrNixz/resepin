<?php
require '../inc_connection.php';

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($jumlah) {
	global $koneksi;
    $recipe_id = htmlspecialchars($jumlah["recipe_id"]);
    $ingredient_id = htmlspecialchars($jumlah["ingredient_id"]);
    $quantity = htmlspecialchars($jumlah["quantity"]);

    $query = "INSERT INTO recipe_ingredients (recipe_id, ingredient_id, quantity) 
			  VALUES ('$recipe_id', '$ingredient_id', '$quantity')
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function ubah($jumlah) {
	global $koneksi;
    $recipe_id = $jumlah["recipe_id"];
    $ingredient_id = $jumlah["ingredient_id"];
    $quantity = htmlspecialchars($jumlah["quantity"]);

	$query = "UPDATE recipe_ingredients 
              SET quantity = '$quantity'
			  WHERE recipe_id = '$recipe_id' AND ingredient_id = '$ingredient_id'
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($recipe_id, $ingredient_id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM recipe_ingredients WHERE recipe_id = $recipe_id AND ingredient_id = $ingredient_id");
    return mysqli_affected_rows($koneksi);
}