<?php

class Laporan {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "pemasukan";
		private $table_name2 = "pengeluaran";
		private $table_name3 = "item_tagihan";
		
		// object properties
		public $id;
		public $where;
		public $tgl_trans;
		public $nama_akun;
		public $debet;
		public $kredit;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function read() {
			
			// select all query
			// if($this->where==null){
				// $query = "SELECT * FROM ".$this->table_name;
			// }else{
				// echo "<script>alert('$this->where')</script>";
				$query = "SELECT p.tgl_trans,SUM(p.total) as total,i.akun 
							FROM pemasukan as p,item_tagihan as i
							WHERE `tgl_trans` LIKE '%-".$this->where."' AND p.pembayaran=i.item_bayar
							GROUP BY tgl_trans,i.akun  ";
			// }
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function bukuBesar() {
			
			// select all query
			$query = "SELECT j.tgl_trans,j.keterangan,d.debit,d.kredit,c.perkiraan 
					FROM jurnal as j,jurnal_detail as d,coa as c 
					WHERE d.akun=".$this->where." AND d.akun=c.id AND d.id_jurnal=j.id";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function neraca() {
			
			// select all query
			$query = "SELECT j.tgl_trans,j.keterangan,d.debit,d.kredit,c.perkiraan 
					FROM jurnal as j,jurnal_detail as d,coa as c 
					WHERE d.akun=".$this->where." AND d.akun=c.id AND d.id_jurnal=j.id";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
	}