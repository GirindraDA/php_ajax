<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "ajax_latihan";

$koneksi = mysqli_connect($server, $user, $password, $dbname);
if(mysqli_connect_error()){
    echo "Koneksi ke database Gagal " . mysqli_connect_error();
}

?>