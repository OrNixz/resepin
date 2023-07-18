<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}

require '../inc_connection.php';
require 'functions.php';

$recipe_id = $_GET['recipe_id'];
$ingredient_id = $_GET['ingredient_id'];

if (hapus($recipe_id, $ingredient_id) > 0) {
    echo "  
        <script>
            alert('Jumlah berhasil dihapus!');
            document.location.href = '../index.php';
        </script>";
} else {
    echo " 
        <script>
            alert('Jumlah gagal dihapus!');
            document.location.href = '../index.php';
        </script>";
    }

?>
