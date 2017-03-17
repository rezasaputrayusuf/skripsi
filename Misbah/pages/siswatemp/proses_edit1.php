<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$siswa1 = new Siswatemp($db);
	
	$ids = $_POST['ids'];
	
		$siswa1->id				=$ids;		
		$siswa1->status_masuk	=$_POST['status_masuk'];
		$siswa1->nisn			=$_POST['nisn'];  
		$siswa1->no_induk		=$_POST['no_induk'];
		$siswa1->nama			=$_POST['nama'];
		$siswa1->jk				=$_POST['jk'];
		$siswa1->tmp_lahir		=$_POST['tmp_lahir'];
		$siswa1->tgl_lahir		=$_POST['tgl_lahir'];
		$siswa1->unit			=$_POST['unit'];
		$siswa1->level			=$_POST['level'];
		$siswa1->ruangan		=$_POST['ruangan'];
		$siswa1->ta				=$_POST['ta'];
		$siswa1->alamat			=$_POST['alamat'];
		$siswa1->ayah			=$_POST['ayah'];
		$siswa1->pekerjaan_a	=$_POST['pekerjaan_a'];
		$siswa1->ibu			=$_POST['ibu'];
		$siswa1->pekerjaan_i	=$_POST['pekerjaan_i'];
		
			
		if($siswa1->update()) {
			
			echo "<script>alert('Berhasil diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
			
		} else {
			echo "<script>alert('Gagal '); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>