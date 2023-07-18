<?php
require 'inc_connection.php';
require 'functions.php';

$id = $_GET['id'];

if (hapus1($id) > 0) {
    echo "  
        <script>
            alert('Bahan-bahan berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
    echo " 
        <script>
            alert('Bahan-bahan gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
    }

?>
