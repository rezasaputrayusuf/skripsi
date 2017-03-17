<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	// $page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$ju = new Laporan($db);
		
	// $ju->bulan		=$_POST['bulan'];
	// $ju->tahun		=$_POST['tahun'];
	// $ju->where = $_POST['bulan']"-"$_POST['tahun'];
	
	$a = $_POST['bulan']."-".$_POST['tahun'];
	
	$ju->where = $a;
	
		if($ju->read()) {
			echo "<script>alert('Berhasil diinput $a'); window.location.href='../../home.php?p=jurnalumum'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=jurnalumum'</script>";
		}
	
	
		
?>