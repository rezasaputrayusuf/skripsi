<?php

class Jurnal {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "jurnal";
		private $table_name1 = "jurnal_detail";
		
		public $id;				
		public $where;				
		public $id_siswa;				
		public $no_bukti;	
		public $tgl_trans;			
		public $cara_bayar;		
		public $keterangan;			
		public $penerima; 
		public $id_jurnal; 
		public $akun; 
		public $debit; 
		public $kredit; 
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			
			$id_siswa	= htmlspecialchars(strip_tags($this->id_siswa));
			$no_bukti	= htmlspecialchars(strip_tags($this->no_bukti));
			$tgl_trans	= htmlspecialchars(strip_tags($this->tgl_trans));			
			$cara_bayar	= htmlspecialchars(strip_tags($this->cara_bayar));		
			$keterangan	= htmlspecialchars(strip_tags($this->keterangan));			
			$penerima	= htmlspecialchars(strip_tags($this->penerima));		
			
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `id_siswa`, `no_bukti`, `tgl_trans`, `cara_bayar`, `keterangan`, `penerima`)
					VALUES 
						('', '{$id_siswa}', '{$no_bukti}', '{$tgl_trans}', '{$cara_bayar}', '{$keterangan}', '{$penerima}')";
			
			// prepare query
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			if($hasil){
				return true;
			}else{
				return false;
			}
		}
		
		function Detail() {
			
			$id_jurnal	= htmlspecialchars(strip_tags($this->id_jurnal));
			$akun 		= htmlspecialchars(strip_tags($this->akun));
			$debit 		= htmlspecialchars(strip_tags($this->debit));			
			$kredit 	= htmlspecialchars(strip_tags($this->kredit));	
			
			$query = "INSERT INTO jurnal_detail
						
						(`id`, `id_jurnal`, `akun`, `debit`, `kredit`)
					VALUES 
						('', '{$id_jurnal}', '{$akun}', '{$debit}', '{$kredit}')";
			
			// prepare query
			$hasil = mysqli_query($this->conn, $query);
			 
			
			// execute query
			if($hasil){
				return true;
			}else{
				return false;
			}
		}
		
		function update() {
			
			$id			= htmlspecialchars(strip_tags($this->id));
			$id_siswa	= htmlspecialchars(strip_tags($this->id_siswa));
			$no_bukti	= htmlspecialchars(strip_tags($this->no_bukti));
			$tgl_trans	= htmlspecialchars(strip_tags($this->tgl_trans));			
			$cara_bayar	= htmlspecialchars(strip_tags($this->cara_bayar));		
			$pembayaran	= htmlspecialchars(strip_tags($this->pembayaran));			
			$total		= htmlspecialchars(strip_tags($this->total));				
			$penerima	= htmlspecialchars(strip_tags($this->penerima));	
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`id_siswa`='{$id_siswa}', `no_bukti`='{$no_bukti}',`tgl_trans`='{$tgl_trans}',`cara_bayar`='{$cara_bayar}',`pembayaran`='{$pembayaran}',`total`='{$total}',`penerima`='{$penerima}'
						WHERE 
							`id`='{$id}'";
			
			// prepare query
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			if($hasil){
				return true;
			}else{
				return false;
			}
		}
		
		function delete() {
			$this->id	= htmlspecialchars(strip_tags($this->id));
			
			// delete query
			$query = "DELETE FROM ".$this->table_name." WHERE `id`='".$this->id."'";
			 
			// prepare query
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			if($hasil){
				return true;
			}else{
				return false;
			}
		}
		// ." WHERE `tgl_trans` LIKE '%-".$this->where."'"
		function readAll() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name;
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readJurnal() {
			
			// select all query
			$query = "SELECT j.tgl_trans,j.keterangan,d.akun,d.debit,d.kredit,c.perkiraan
						FROM jurnal as j,jurnal_detail as d,coa as c
						WHERE d.akun=c.id AND j.id=d.id_jurnal AND tgl_trans LIKE '%-".$this->where."'
						GROUP BY d.id_jurnal
						";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readOne() {
			// query to read single record
			$query = "SELECT * FROM ".$this->table_name." WHERE id ='".$this->id."' LIMIT 0,1";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			$row = mysqli_fetch_array($hasil);
			
			return $row;
		}
		
	}