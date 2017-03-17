<?php

class Coa{
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "coa";
		
		// object properties
		public $id;
		public $perkiraan;
		public $saldo;
		public $keterangan;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
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
		
		function readAktiva() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE keterangan LIKE 'aktiva%'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readPasiva() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE keterangan LIKE 'modal%'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function readLaba() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE keterangan LIKE 'biaya%'";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function update() {
			
			$id			= htmlspecialchars(strip_tags($this->id));
			$saldo		= htmlspecialchars(strip_tags($this->saldo));
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`saldo`='{$saldo}'
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
		
	}