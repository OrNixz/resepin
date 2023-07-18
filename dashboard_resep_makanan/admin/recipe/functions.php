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


function tambah($resep) {
	global $koneksi;
    $id = htmlspecialchars($resep["id"]);
    $name = htmlspecialchars($resep["name"]);
    $description = htmlspecialchars($resep["description"]);

    $image = upload();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO recipes (id, name, description, image) 
			  VALUES ('$id', '$name', '$description', '$image')
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function upload() {
	$fileName = $_FILES['image']['name'];
	$fileSize = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	// Cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Mohon untuk memilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $validExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if(!in_array($imageExtension, $validExtension)) {
        echo "<script>
                alert('Mohon ulangi lagi, yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar
    if ($fileSize > 1048576 ) {
        echo "<script>
                alert('File ukuran gambar terlalu besar, silahkan ulangi lagi!');
              </script>";
        return false;
    }

    // Lolos pengecekan, gambar siap diupload
    // Generate nama gambar baru
    $newFileName = uniqid();
    $newFileName .= ".";
    $newFileName .= $imageExtension;

    move_uploaded_file($tmpName, '../uploads/' . $newFileName);
    return $newFileName;
}

function ubah($resep) {
	global $koneksi;
    $id = ($resep["id"]);
    $name = htmlspecialchars($resep["name"]);
    $description = htmlspecialchars($resep["description"]);
	$oldImage = $resep["oldImage"];

	// Cek apakah user pilih gambar baru atau tidak
	if ($_FILES["image"]["error"] === 4) {
		$image = $oldImage;
	} else {
		$image = upload();
	}

	$query = "UPDATE recipes SET
				name = '$name', 
			  	description = '$description', 
				image = '$image' 
			  WHERE id = $id
			 ";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM recipes WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}