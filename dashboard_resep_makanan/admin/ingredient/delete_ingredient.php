<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}

require '../inc_connection.php';
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "  
        <script>
            alert('Bahan-bahan berhasil dihapus!');
            document.location.href = '../index.php';
        </script>";
} else {
    echo " 
        <script>
            alert('Bahan-bahan gagal dihapus!');
            document.location.href = '../index.php';
        </script>";
    }

?>
