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

function tambah($bahan) {
	global $koneksi;
    $id = htmlspecialchars($bahan["id"]);
    $name = htmlspecialchars($bahan["name"]);

    $query = "INSERT INTO ingredients (id, name) 
			  VALUES ('$id', '$name')
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function ubah($bahan) {
	global $koneksi;
    $id = $bahan["id"];
    $name = htmlspecialchars($bahan["name"]);

	$query = "UPDATE ingredients 
              SET name = '$name'
			  WHERE id = $id
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM ingredients WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}