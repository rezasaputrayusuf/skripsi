<?php 
// require 'core/init.php';
// $general->logged_out_protect();
	session_start();
	if(isset($_GET['p'])){
		$url = 	$_GET['p'];
		$pecah = explode('-',$url);
		$page  = isset($pecah[0]) ? $pecah[0] : "";
		$act   = isset($pecah[1]) ? $pecah[1] : "";
		$id	   = isset($pecah[2]) ? $pecah[2] : "";
	}
	
	$login = isset($_SESSION['login']) ? $_SESSION['login'] : "";
	
	if($login=="") {
		echo "<script>window.location.href='login.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SI Keuangan Misbahussudur | Data <?=$page?></title>
		<?php include "ui/lib.php"; ?>
	</head>

	<body class="no-skin">
		<?php
		include "ui/navbar.php";
		include "ui/side.php";
		include "content.php";
		include "ui/script.php";
		?>
	</body>
</html>
