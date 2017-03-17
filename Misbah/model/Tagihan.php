<?php

class Tagihan{
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "item_tagihan";
		
		// object properties
		public $id;
		public $item_bayar;
		public $akun;
		public $kelas;
		public $biaya;
		public $sifat;
		public $masa;
		public $keterangan;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			$id				= htmlspecialchars(strip_tags($this->id));
			$item_bayar		= htmlspecialchars(strip_tags($this->item_bayar));
			$akun			= htmlspecialchars(strip_tags($this->akun));
			$kelas			= htmlspecialchars(strip_tags($this->kelas));
			$biaya			= htmlspecialchars(strip_tags($this->biaya));
			$sifat			= htmlspecialchars(strip_tags($this->sifat));
			$masa			= htmlspecialchars(strip_tags($this->masa));
			$keterangan		= htmlspecialchars(strip_tags($this->keterangan));
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `item_bayar`, `akun`, `kelas`, `biaya`, `sifat`, `masa`, `keterangan`)
					VALUES 
						('', '{$item_bayar}', '{$akun}','{$kelas}', '{$biaya}', '{$sifat}', '{$masa}', '{$keterangan}')";
			
			// if ($sifat=='wajib'){
				// $tag = "INSERT INTO 
						// tagihan
						// (`id`, `siswa`, `item_tagihan`, `status`)
					// VALUES 
						// ('', '{$siswa}', '{$item_tagihan}', '{$status}')";
			// }			
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
			$id				= htmlspecialchars(strip_tags($this->id));
			$item_bayar		= htmlspecialchars(strip_tags($this->item_bayar));
			$akun			= htmlspecialchars(strip_tags($this->akun));
			$kelas			= htmlspecialchars(strip_tags($this->kelas));
			$biaya			= htmlspecialchars(strip_tags($this->biaya));
			$sifat			= htmlspecialchars(strip_tags($this->sifat));
			$masa			= htmlspecialchars(strip_tags($this->masa));
			$keterangan		= htmlspecialchars(strip_tags($this->keterangan));
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`item_bayar`='{$item_bayar}',`akun`='{$akun}',`kelas`='{$kelas}',`biaya`='{$biaya}',`sifat`='{$sifat}' ,`masa`='{$masa}' ,`keterangan`='{$keterangan}' 
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
			$query = "SELECT * FROM ".$this->table_name." ORDER BY `kelas` ASC";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readWajib() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE sifat='wajib' AND masa<>'pangkal'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readNo() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE sifat<>'wajib'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function uangPangkal() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE sifat='wajib' AND masa='pangkal'";
		 
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
			$query = "SELECT * FROM `".$this->table_name."` WHERE id ='".$this->id."'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			$row = mysqli_fetch_array($hasil);
			
			return $row;
		}
	}