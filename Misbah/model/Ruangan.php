<?php

class Ruangan {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "ruangan";
		
		// object properties
		public $id;
		public $unit;
		public $level;
		public $nama;
		public $wali;
		public $status;
		public $where;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			$id			= htmlspecialchars(strip_tags($this->id));
			$unit		= htmlspecialchars(strip_tags($this->unit));
			$level		= htmlspecialchars(strip_tags($this->level));
			$nama		= htmlspecialchars(strip_tags($this->nama));
			$wali		= htmlspecialchars(strip_tags($this->wali));
			$status		= htmlspecialchars(strip_tags($this->status));
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `unit`, `level`, `nama`, `wali`, `status`)
					VALUES 
						('', '{$unit}', '{$level}', '{$nama}', '{$wali}', '{$status}')";
			
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
			$unit		= htmlspecialchars(strip_tags($this->unit));
			$level		= htmlspecialchars(strip_tags($this->level));
			$nama		= htmlspecialchars(strip_tags($this->nama));
			$wali		= htmlspecialchars(strip_tags($this->wali));
			$status		= htmlspecialchars(strip_tags($this->status));
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`unit`='{$unit}',`level`='{$level}',`nama`='{$nama}',`wali`='{$wali}',`status`='{$status}'
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
			if($this->where==null){
				$query = "SELECT * FROM ".$this->table_name;
			}else{
				$query = "SELECT * FROM ".$this->table_name."WHERE level =".$this->where;
			}
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function Pilih() {
			
			// select all query
			if($this->unit==null){
				$query = "SELECT * FROM ".$this->table_name." GROUP BY unit";
			}elseif($this->unit!=null){
				if($this->level!=null){
					$query = "SELECT * FROM ".$this->table_name." WHERE unit =".$this->unit." level =".$this->level;
				}else {
					$query = "SELECT * FROM ".$this->table_name." WHERE unit =".$this->unit;
				}
			}
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