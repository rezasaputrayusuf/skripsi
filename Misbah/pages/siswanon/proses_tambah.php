<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$siswa = new Siswa($db);
			
		$siswa->status_masuk	=$_POST['status_masuk'];
		$siswa->nisn			=$_POST['nisn'];  
		$siswa->no_induk		=$_POST['no_induk'];
		$siswa->nama			=$_POST['nama'];
		$siswa->jk				=$_POST['jk'];
		$siswa->tmp_lahir		=$_POST['tmp_lahir'];
		$siswa->tgl_lahir		=$_POST['tgl_lahir'];
		$siswa->unit			=$_POST['unit'];
		$siswa->level			=$_POST['level'];
		$siswa->ruangan			=$_POST['ruangan'];
		$siswa->ta				=$_POST['ta'];
		$siswa->alamat			=$_POST['alamat'];
		$siswa->ortu			=$_POST['ortu'];
		
		if($siswa->insert()) {
			echo "<script>alert('Berhasil diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		} else {
			echo "<script>alert('Gagal diinput'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>