<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	// $tagihan = new Tagihan($db);
	// $data1 = $tagihan->uangPangkal();
	
	// $siswa = new Siswa($db);
		
	
	$bayar = new Pemasukan($db);
	$update = new Defaults($db);
	$updateCoa = new Coa($db);
				
		$ids 		=$_POST['ids'];
		$cara_bayar	=$_POST['cara_bayar'];
		$pembayaran	=$_POST['pembayaran'];
		// $akun		=$_POST['akun'];
		$bulan		=$_POST['bulan'];
		$total		=$_POST['total'];
		$user		=$_POST['user'];
		//$penerima   =$_POST['penerima'];
		session_start();
		$_SESSION['ids'] = $ids;
		$_SESSION['pembayaran'] = $pembayaran[0];
		$_SESSION['bulan'] = $bulan[0];
		$_SESSION['total'] = $total[0];
		$_SESSION['user'] = $user;
		
		
		for($i=0;$i<count($pembayaran);$i++){
			
			$bayar->id_siswa	=$ids; 		
			$bayar->no_bukti	="PMS".$ids.date("dmY"); 
			$bayar->tgl_trans	=date("d-m-Y"); 	
			$bayar->cara_bayar	=$cara_bayar[$i]; 	
			$bayar->pembayaran	=$pembayaran[$i]; 	
			// $bayar->akun		=$akun[$i]; 	
			$bayar->total		=$total[$i]; 		
			$bayar->penerima	=$user;    
			
			$update->siswa=$ids;
			$update->bulan=$bulan[$i];
			$update->item_tagihan=$pembayaran[$i];
			$update->total=$total[$i];
			$update->update();
			
			if($bayar->insert()) {
				$updateCoa->id = 6;
				$data = $updateCoa->readOne();
				extract($data);
				$tot = $saldo + $total[$i];
				$updateCoa->id = 6;
				$updateCoa->saldo = $tot;
				$updateCoa->update();
				
				// echo "<script>alert('Berhasil diinput'); window.open('cetak.php'); window.location.href='../../home.php?p=".$page."';</script>";
				echo "<script>alert('Berhasil diinput');  window.location.href='../../home.php?p=".$page."'; window.open('../../home.php?p=kwitansi');</script>";
				// echo "<script>alert('Berhasil diinput');  window.location.href='../../home.php?p=".$page."'; </script>";
			} else {
				echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
			}
		}
?>