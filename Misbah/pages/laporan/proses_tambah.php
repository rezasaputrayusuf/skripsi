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
			
		foreach($data as $rows) {
			extract($rows);
			
			$bayar->siswa=$id;
			$ids = $id;
			foreach($tag as $row) {
				extract($row); 
				
				if($masa=="BULANAN"){
					$bayar->bulan = ""; //
				}else{
					$bayar->bulan = "";
				}
				
				$bayar->tahun = date("Y");
				
				if($level == $kelas){
					
					$bayar->item_tagihan=$item_bayar; 
					// $bayar->bulan = $a;
					if($bayar->insert()) {
						echo "<script>alert('Berhasil diUpdate'); window.location.href='home.php?p=".$page."'</script>";
					} else {
						echo "<script>alert('Data Up to Date $level $kelas'); window.location.href='home.php?p=".$page."'</script>";
					}
				}
			}
		}
		
		
?>