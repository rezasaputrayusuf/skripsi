<?php

class Pemasukan {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "pemasukan";
		
		public $id;				
		public $id_siswa;				
		public $no_bukti;	
		public $tgl_trans;			
		public $cara_bayar;		
		public $detail;			
		public $total;				
		public $penerima;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			
			$id_siswa	= htmlspecialchars(strip_tags($this->id_siswa));
			$no_bukti	= htmlspecialchars(strip_tags($this->no_bukti));
			$tgl_trans	= htmlspecialchars(strip_tags($this->tgl_trans));			
			$cara_bayar	= htmlspecialchars(strip_tags($this->cara_bayar));		
			$pembayaran	= htmlspecialchars(strip_tags($this->pembayaran));			
			$total		= htmlspecialchars(strip_tags($this->total));				
			$penerima	= htmlspecialchars(strip_tags($this->penerima));		
			
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `id_siswa`, `no_bukti`, `tgl_trans`, `cara_bayar`, `pembayaran`, `total`, `penerima`)
					VALUES 
						('', '{$id_siswa}', '{$no_bukti}', '{$tgl_trans}', '{$cara_bayar}', '{$pembayaran}', '{$total}', '{$penerima}')";
			
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
		
		function readAll() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." ORDER BY id DESC";
		 
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
		
		
		function pangkal() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE id_siswa ='".$this->id_siswa."' AND pembayaran='pangkal'";
		 
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