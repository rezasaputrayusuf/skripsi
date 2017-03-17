<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include '../../model/' . $class . '.php';
    });
	$page = $_REQUEST['page'];
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$siswa = new Siswatemp($db);
	$siswa1 = new Siswa($db);
	$siswa2 = new Defaults($db);
	$siswa3 = new Pemasukan($db);
	
	$ids = $_POST['ids'];
	$kur = $_POST['status'];
	
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
		$siswa1->ortu			=$_POST['ortu'];
		
		$siswa2->siswa = $ids;
		$siswa2->item_tagihan = "pangkal";
		$siswa2->bulan = date('m');
		$siswa2->tahun = date('Y');
		$siswa2->status = 0;
		
		$siswa3->id_siswa = $ids;
		$siswa3->no_bukti = "PSB";
		$siswa3->tgl_trans = date('d-m-Y');
		$siswa3->cara_bayar = "cash";
		$siswa3->pembayaran = "pangkal";
		$siswa3->total = $_POST['nominal'];
		$siswa3->penerima = "kasir";
			
		if($siswa1->insert()) {
			if($siswa2->insertPangkal()){
				$siswa3->insert();
				echo "<script>alert('Berhasil diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
			}
			echo "aaa";
		} else {
			if($kur==0){
				$siswa2->siswa = $ids;
				$siswa2->status = 1;
				$siswa2->update();
			}else {
				$siswa3->insert();
			}
			
			echo "<script>alert('Pembayaran diUpdate'); window.location.href='../../home.php?p=".$page."'</script>";
		}
		
?>