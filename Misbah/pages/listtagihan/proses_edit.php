<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$id = $_POST['id'];
	$masa = $_POST['masa'];
	$bayar = $_POST['item_bayar'];
		
	$read = new Defaults($db);
	
	for($i=0;$i<count($bayar);$i++){	
		$read->siswa			=$id;
		$read->item_tagihan		=$bayar[$i]; 
		$read->status			='0';  
		
		if($masa=="BULANAN"){
			$read->bulan = date("m"); //
		}else{
			$read->bulan = "";
		}
		
		$read->tahun = date("Y");
		
		if($read->insertPangkal()) {
			echo "<script>alert('Berhasil diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		}
	}
		
?>