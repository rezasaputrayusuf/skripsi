<?php 
session_start();
session_destroy();
// header('Location:home.php');
echo "<script>alert('Berhasil Logout'); window.location.href='home.php';</script>";
?>