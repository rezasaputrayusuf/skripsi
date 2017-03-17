<?php
error_reporting(0);
if(isset($_GET['p'])){
	$url = 	$_GET['p'];
	$pecah = explode('-',$url);
	$page  = isset($pecah[0]) ? $pecah[0] : "";
	$act   = isset($pecah[1]) ? $pecah[1] : "";
	$id	   = isset($pecah[2]) ? $pecah[2] : "";
	// echo $url;
	// echo $page;
	// echo $act;
	
	switch($page) {
		case '':  include "pages/home.php"; break;
		case 'home':  include "pages/main.php"; break;
		case 'default':  include "pages/default/default.php"; break;
		case 'kwitansi':  include "pages/bayar/kwitansi.php"; break;
		case 'jurnalumum':  include "pages/jurnalumum/jurnalumum.php"; break;
		case 'pemasukan':  include "pages/pemasukan/pemasukan.php"; break;
		case 'pengeluaran':  include "pages/pengeluaran/pengeluaran.php"; break;
		case 'printGl':  include "pages/laporan/printGl.php"; break;
		case 'gl':  include "pages/laporan/gl.php"; break;
		case 'jurnal':  include "pages/laporan/jurnal.php"; break;
		case 'barang':  include "pages/barang/barang.php"; break;
		case 'neraca':  include "pages/laporan/neraca.php"; break;
		case 'bukubesar':  include "pages/laporan/bukubesar.php"; break;
		case 'bukubesardetail':  include "pages/laporan/bukubesardetail.php"; break;
		case 'aruskas':  include "pages/laporan/aruskas.php"; break;
		case 'laba':  include "pages/laporan/laba.php"; break;
		case 'wali':  include "pages/wali/wali.php"; break;
		case 'siswa':  include "pages/siswa/siswa.php"; break;
		case 'siswatemp':  include "pages/siswatemp/siswatemp.php"; break;
		case 'siswanon':  include "pages/siswanon/siswanon.php"; break;
		case 'listtagihan':  include "pages/listtagihan/listtagihan.php"; break;
		case 'guru':  include "pages/guru/guru.php"; break;
		case 'ta':  include "pages/ta/ta.php"; break;
		case 'item':  include "pages/item/item.php"; break;
		case 'unit':  include "pages/unit/unit.php"; break;
		case 'ruang':  include "pages/ruang/ruang.php"; break;
		case 'bayar':  include "pages/bayar/bayar.php"; break;
		default: echo "notfound"; break;
	}
} else include "pages/home.php";
?>