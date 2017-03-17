<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$pengeluaran = new Pengeluaran($db);
		
		$pengeluaran->no_bukti		=$_POST['no_bukti'];		
		$pengeluaran->tgl_trans		=$_POST['tgl_trans'];
		$pengeluaran->cara_bayar	=$_POST['cara_bayar'];
		$pengeluaran->pembayaran	=$_POST['pembayaran'];
		$pengeluaran->total			=$_POST['total'];
		$pengeluaran->keterangan	=$_POST['keterangan'];
		
		if($pengeluaran->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>