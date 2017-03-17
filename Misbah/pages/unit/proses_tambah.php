<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$unit = new Unit($db);
		
		$unit->unit	=$_POST['unit'];		
		$unit->keterangan	=$_POST['keterangan'];
		
		if($unit->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>