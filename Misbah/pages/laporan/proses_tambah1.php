<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '/model/' . $class . '.php';
    });
	$page = 'default';
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$siswa = new Siswa($db);
	$data = $siswa->readAll();
	
	$tagihan = new Tagihan($db);
	$tag = $tagihan->readWajib();
	
	$bayar = new Defaults($db);
			
	$bayar->siswa=$id;		
	$bayar->item_tagihan=$item_bayar; 
	$bayar->bulan = $a;
	$bayar->status='0';
	
	if($bayar->insert1()) {
		echo "<script>alert('Berhasil diUpdate'); window.location.href='home.php?p=".$page."'</script>";
	} else {
		echo "<script>alert('Data Up to Date $level $kelas'); window.location.href='home.php?p=".$page."'</script>";
	}
	
		// foreach($data as $rows) {
			// extract($rows);
			
			// $bayar->siswa=$id;
			// $ids = $id;
			// foreach($tag as $row) {
				// extract($row); 
				// $bayar->status='0'; 
				
				// if($level == $kelas){
					
					// if($masa == 'BULANAN'){
						// for($a = 1; $a <=12; $a++){
							// $bayar->item_tagihan=$item_bayar; 
							// $bayar->bulan = $a;
							// if($bayar->insert()) {
							// echo "<script>alert('Berhasil diUpdate'); window.location.href='home.php?p=".$page."'</script>";
							// } else {
								// echo "<script>alert('Data Up to Date $level $kelas'); window.location.href='home.php?p=".$page."'</script>";
							// }
						// }
					// }
				// }
			// }
		// }
		
		
?>