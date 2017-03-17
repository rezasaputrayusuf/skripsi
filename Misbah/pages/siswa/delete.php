<?php
	// include database and object files
	spl_autoload_register(function ($class) {
        include 'model/' . $class . '.php';
    });
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$siswa = new Siswa($db);
	
		$siswa->id = $id;
	
		if($siswa->delete()) {
			echo "<script>alert('Berhasil dihapus'); window.location.href='?p=$page'</script>";
		} else {
			echo "<script>alert('Gagal dihapus'); window.location.href='?p=$page'</script>";
		}
?>