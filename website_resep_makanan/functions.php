<?php

// menghubungkan ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "resep_makanan";

$koneksi = mysqli_connect($host, $username, $password, $database);

// memeriksa koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
function query($query){
  global $koneksi;
  $result= mysqli_query($koneksi,$query);
  $rows=[];
  while($row = mysqli_fetch_assoc($result)){
      $rows[]=$row;
  }

  return $rows;

}