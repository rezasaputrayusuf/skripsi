<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$tagihan = new Tagihan($db);
		
	$tagihan->id				=$_POST['id'];		
	$tagihan->item_bayar	=$_POST['item_bayar'];		
	$tagihan->kelas	=$_POST['kelas'];
	$tagihan->biaya	=$_POST['biaya'];
	$tagihan->sifat	=$_POST['sifat'];
	$tagihan->masa	=$_POST['masa'];
	$tagihan->keterangan	=$_POST['keterangan'];
	
		
		if($tagihan->update()) {
			echo "<script>alert('Berhasil diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>