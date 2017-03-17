<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$barang = new Barang($db);
		
		$barang->id				=$_POST['id'];  
		$barang->nama_barang	=$_POST['nama_barang'];  
		$barang->jumlah			=$_POST['jumlah'];
		$barang->jenis			=$_POST['jenis'];
		
		
		if($guru->update()) {
			echo "<script>alert('Berhasil diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>