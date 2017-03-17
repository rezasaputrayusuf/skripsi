<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$wali = new Wali($db);
		
		$wali->nama_ayah		=$_POST['nama_ayah'];		
		$wali->pekerjaan_ayah	=$_POST['pekerjaan_ayah'];
		$wali->nama_ibu		    =$_POST['nama_ibu'];  
		$wali->pekerjaan_ibu	=$_POST['pekerjaan_ibu'];
		$wali->alamat			=$_POST['alamat'];
		$wali->no_telfon		=$_POST['no_telfon'];
		
		if($wali->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>