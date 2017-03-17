<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$barang = new Barang($db);
			
		$barang->nama_barang			=$_POST['nama_barang'];  
		$barang->jumlah			=$_POST['jumlah'];
		$barang->jenis			=$_POST['jenis'];
		
		if($barang->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>