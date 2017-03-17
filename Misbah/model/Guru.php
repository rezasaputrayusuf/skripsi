<?php

class Guru {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "guru";
		
		public $id;				
		public $nik;	
		public $nama;			
		public $jk;		
		public $tgl_masuk;			
		public $tempat_lahir;				
		public $tgl_lahir;		
		public $alamat;
		public $gaji;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			
			
			$id			= htmlspecialchars(strip_tags($this->id));
			$nik		= htmlspecialchars(strip_tags($this->nik));
			$nama		= htmlspecialchars(strip_tags($this->nama));			
			$jk			= htmlspecialchars(strip_tags($this->jk));		
			$tgl_masuk	= htmlspecialchars(strip_tags($this->tgl_masuk));			
			$tempat_lahir= htmlspecialchars(strip_tags($this->tempat_lahir));				
			$tgl_lahir	= htmlspecialchars(strip_tags($this->tgl_lahir));		
			$alamat		= htmlspecialchars(strip_tags($this->alamat));		
			$gaji		= htmlspecialchars(strip_tags($this->gaji));		
			
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `nik`, `nama`, `jk`, `tgl_masuk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gaji`)
					VALUES 
						('', '{$nik}', '{$nama}', '{$jk}', '{$tgl_masuk}', '{$tempat_lahir}', '{$tgl_lahir}', '{$alamat}', '{$gaji}')";
			
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
			$nik		= htmlspecialchars(strip_tags($this->nik));
			$nama		= htmlspecialchars(strip_tags($this->nama));			
			$jk			= htmlspecialchars(strip_tags($this->jk));		
			$tgl_masuk	= htmlspecialchars(strip_tags($this->tgl_masuk));			
			$tempat_lahir= htmlspecialchars(strip_tags($this->tempat_lahir));				
			$tgl_lahir	= htmlspecialchars(strip_tags($this->tgl_lahir));		
			$alamat= htmlspecialchars(strip_tags($this->alamat));		
			$gaji= htmlspecialchars(strip_tags($this->gaji));		
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`nik`='{$nik}',`nama`='{$nama}',`jk`='{$jk}',`tgl_masuk`='{$tgl_masuk}',`tempat_lahir`='{$tempat_lahir}',`tgl_lahir`='{$tgl_lahir}',`tgl_lahir`='{$tgl_lahir}',`alamat`='{$alamat}',`gaji`='{$gaji}'
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