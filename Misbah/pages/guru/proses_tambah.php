<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$guru = new Guru($db);
			
		$guru->nik			=$_POST['nik'];  
		$guru->nama			=$_POST['nama'];
		$guru->jk			=$_POST['jk'];
		$guru->tgl_masuk	=$_POST['tgl_masuk'];
		$guru->tempat_lahir	=$_POST['tempat_lahir'];
		$guru->tgl_lahir	=$_POST['tgl_lahir'];
		$guru->alamat		=$_POST['alamat'];
		$guru->gaji			=$_POST['gaji'];
		
		if($guru->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>