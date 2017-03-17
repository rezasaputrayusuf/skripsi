<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$ruang = new Ruangan($db);
		
		$ruang->unit		=$_POST['unit'];		
		$ruang->level		=$_POST['level'];
		$ruang->nama		=$_POST['nama'];  
		$ruang->wali		=$_POST['wali'];
		$ruang->status		=$_POST['status'];
		
		if($ruang->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>