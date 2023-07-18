<?php
require 'inc_connection.php';
require 'functions.php';

$id = $_GET['id'];
$recipe_id = $_GET['recipe_id'];

if (hapus3($id, $recipe_id) > 0) {
    echo "  
        <script>
            alert('Instruksi berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
    echo " 
        <script>
            alert('Instruksi gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
    }

?>
