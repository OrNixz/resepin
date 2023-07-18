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

function tambah($instruksi) {
	global $koneksi;
    $id = htmlspecialchars($instruksi["id"]);
    $recipe_id = htmlspecialchars($instruksi["recipe_id"]);
    $instruction = htmlspecialchars($instruksi["instruction"]);

    $query = "INSERT INTO instructions (id, recipe_id, instruction)
			  VALUES ('$id', '$recipe_id', '$instruction')
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function ubah($instruksi) {
	global $koneksi;
    $id = $instruksi["id"];
    $recipe_id = $instruksi["recipe_id"];
    $instruction = htmlspecialchars($instruksi["instruction"]);

	$query = "UPDATE instructions
              SET instruction = '$instruction'
			  WHERE id = $id AND recipe_id = $recipe_id
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id, $recipe_id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM instructions WHERE id = $id AND recipe_id = $recipe_id");
    return mysqli_affected_rows($koneksi);
}
