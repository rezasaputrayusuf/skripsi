<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$akuns = $_POST['akun'];
	$akuns1 = $_POST['akun1'];
	$jurnal = new Jurnal($db);
	$saldo = new Coa($db);
	
		$jurnal->no_bukti	=$_POST['no_bukti'];		
		$jurnal->tgl_trans	=$_POST['tgl_trans'];
		$jurnal->cara_bayar	=$_POST['cara_bayar'];
		$jurnal->keterangan	=$_POST['keterangan'];
		$jurnal->penerima	=$_POST['user'];
		
		if($jurnal->insert()) {	
		
			$debit = $_POST['debit'];
			$kredit = $_POST['kredit'];
			
			$jurnal->id_jurnal	=$_POST['id_jurnal'];
			$jurnal->akun		=$akuns;
			$jurnal->debit		=$debit;
			$jurnal->kredit		=$kredit;
			$jurnal->detail();
			
			
			$saldo->id=$akuns;
			$datas = $saldo->readOne();
			
			$saldos = $datas['saldo'];
			if($debit=="" && $kredit!="" ){
				$ubah = $saldos-$kredit;
			}else{
				$ubah = $saldos+$debit;
			}
			$saldo->id=$akuns;
			$saldo->saldo=$ubah;
			$saldo->update();
			
			
			
			//siniiiii broo
			$debit1 = $_POST['debit1'];
			$kredit1 = $_POST['kredit1'];
			
			$jurnal->id_jurnal	=$_POST['id_jurnal'];
			$jurnal->akun		=$akuns1;
			$jurnal->debit		=$debit1;
			$jurnal->kredit		=$kredit1;
			$jurnal->detail();
			
			$saldo->id=$akuns1;
			$datas1 = $saldo->readOne();
			
			$saldos1 = $datas1['saldo'];
			if($debit1=="" && $kredit1!="" ){
				$ubah1 = $saldos1-$kredit1;
			}else{
				$ubah1 = $saldos1+$debit1;
			}
			$saldo->id=$akuns1;
			$saldo->saldo=$ubah1;
			$saldo->update();
			
			
			// if($debit==""){
				
				// $saldos = $datas['saldo'];
				// $ubah = $saldos-$kredit;
				
				// $saldo->id=$akuns;
				// $saldo->saldo=$ubah;
				// $saldo->update();
			// }else{
				
				// $saldos=$datas['saldo'];
				// $ubah = $saldos+$debit;
				
				// $saldo->id=$akuns;
				// $saldo->saldo=$ubah;
				// $saldo->update();
			// }
			
			// $debit1 = $_POST['debit1'];
			// $kredit1 = $_POST['kredit1'];
			// $jurnal->id_jurnal	=$_POST['id_jurnal'];
			// $jurnal->akun		=$_POST['akun1'];
			// $jurnal->debit		=$debit1;
			// $jurnal->kredit		=$kredit1;
			// $jurnal->detail();
			
			// $saldo->id=$akuns;
			// $datas = $saldo->readOne();
			
			// if($debit1==""){
				
				// $saldos1=$datas['saldo'];
				// $ubah = $saldos1-$kredit1;
				
				// $saldo->id=$akuns;
				// $saldo->saldo=$ubah;
				// $saldo->update();
			// }else{
				
				// $saldos1=$datas['saldo'];
				// $ubah = $saldos1+$debit1;
				
				// $saldo->id=$akuns;
				// $saldo->saldo=$ubah;
				// $saldo->update();
			// }
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."-add'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."-add'</script>";
		}
		
?>