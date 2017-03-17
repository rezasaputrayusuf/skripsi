<?php

class Barang {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "barang";
		
		public $id;				
		public $nama_barang;	
		public $jumlah;			
		public $jenis;	
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			
			
			$id				= htmlspecialchars(strip_tags($this->id));
			$nama_barang	= htmlspecialchars(strip_tags($this->nama_barang));
			$jumlah			= htmlspecialchars(strip_tags($this->jumlah));			
			$jenis			= htmlspecialchars(strip_tags($this->jenis));				
			
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `nama_barang`, `jumlah`, `jenis`)
					VALUES 
						('', '{$nama_barang}', '{$jumlah}', '{$jenis}')";
			
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
			$nama_barang	= htmlspecialchars(strip_tags($this->nama_barang));
			$jumlah			= htmlspecialchars(strip_tags($this->jumlah));			
			$jenis			= htmlspecialchars(strip_tags($this->jenis));			
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`nama_barang`='{$nama_barang}',`jumlah`='{$jumlah}',`jenis`='{$jenis}'
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
		
		function readOne() {
			// query to read single record
			$query = "SELECT * FROM ".$this->table_name." WHERE id ='".$this->id."' LIMIT 0,1";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			$row = mysqli_fetch_array($hasil);
			
			return $row;
		}
	}