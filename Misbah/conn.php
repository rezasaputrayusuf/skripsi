<?php


// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "kucing";
$database = "misbah";

// Koneksi dan memilih database di server
$con = mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database,$con) or die("Database tidak bisa dibuka");


$con = mysqli_connect($server,$username,$password,$database);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$database);

?>
