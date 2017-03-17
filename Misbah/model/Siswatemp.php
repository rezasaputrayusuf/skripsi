<?php

class Siswatemp {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "siswatemp";
		
		public $id;				
		public $status_masuk;	
		public $nisn;			
		public $no_induk;		
		public $nama;			
		public $jk;				
		public $tmp_lahir;		
		public $tgl_lahir;		
		public $unit;		
		public $level;		
		public $ruangan;		
		public $ta;		
		public $alamat;		
		public $ayah;		
		public $pekerjaan_a;		
		public $ibu;		
		public $pekerjaan_i;		
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert() {
			
			
			$id				= htmlspecialchars(strip_tags($this->id));
			$status_masuk	= htmlspecialchars(strip_tags($this->status_masuk));
			$nisn			= htmlspecialchars(strip_tags($this->nisn));			
			$no_induk		= htmlspecialchars(strip_tags($this->no_induk));		
			$nama			= htmlspecialchars(strip_tags($this->nama));			
			$jk				= htmlspecialchars(strip_tags($this->jk));				
			$tmp_lahir		= htmlspecialchars(strip_tags($this->tmp_lahir));		
			$tgl_lahir		= htmlspecialchars(strip_tags($this->tgl_lahir));		
			$unit			= htmlspecialchars(strip_tags($this->unit));		
			$level			= htmlspecialchars(strip_tags($this->level));		
			$ruangan		= htmlspecialchars(strip_tags($this->ruangan));		
			$ta				= htmlspecialchars(strip_tags($this->ta));		
			$alamat			= htmlspecialchars(strip_tags($this->alamat));		
			$ayah			= htmlspecialchars(strip_tags($this->ayah));		
			$pekerjaan_a	= htmlspecialchars(strip_tags($this->pekerjaan_a));		
			$ibu			= htmlspecialchars(strip_tags($this->ibu));		
			$pekerjaan_i	= htmlspecialchars(strip_tags($this->pekerjaan_i));		
			
			
			$query = "INSERT INTO 
						".$this->table_name."
						(`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `alamat`, `ayah`, `pekerjaan_a`, `ibu`, `pekerjaan_i`)
					VALUES 
						('', '{$status_masuk}', '{$nisn}', '{$no_induk}', '{$nama}', '{$jk}', '{$tmp_lahir}', '{$tgl_lahir}', '{$unit}', '{$level}', '{$ruangan}', '{$ta}', '{$alamat}', '{$ayah}', '{$pekerjaan_a}', '{$ibu}', '{$pekerjaan_i}')";
			
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
			$status_masuk	= htmlspecialchars(strip_tags($this->status_masuk));
			$nisn			= htmlspecialchars(strip_tags($this->nisn));			
			$no_induk		= htmlspecialchars(strip_tags($this->no_induk));		
			$nama			= htmlspecialchars(strip_tags($this->nama));			
			$jk				= htmlspecialchars(strip_tags($this->jk));				
			$tmp_lahir		= htmlspecialchars(strip_tags($this->tmp_lahir));		
			$tgl_lahir		= htmlspecialchars(strip_tags($this->tgl_lahir));		
			$unit			= htmlspecialchars(strip_tags($this->unit));		
			$level			= htmlspecialchars(strip_tags($this->level));		
			$ruangan		= htmlspecialchars(strip_tags($this->ruangan));		
			$ta				= htmlspecialchars(strip_tags($this->ta));		
			$alamat			= htmlspecialchars(strip_tags($this->alamat));		
			$ayah			= htmlspecialchars(strip_tags($this->ayah));		
			$pekerjaan_a	= htmlspecialchars(strip_tags($this->pekerjaan_a));		
			$ibu			= htmlspecialchars(strip_tags($this->ibu));		
			$pekerjaan_i	= htmlspecialchars(strip_tags($this->pekerjaan_i));	
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`status_masuk`='{$status_masuk}',`nisn`='{$nisn}',`no_induk`='{$no_induk}',`nama`='{$nama}',`jk`='{$jk}',`tmp_lahir`='{$tmp_lahir}',`tgl_lahir`='{$tgl_lahir}',`unit`='{$unit}',`level`='{$level}',`ruangan`='{$ruangan}',`ta`='{$ta}',`alamat`='{$alamat}',`ayah`='{$ayah}', `pekerjaan_a`='{$pekerjaan_a}', `ibu`='{$ibu}', `pekerjaan_i`='{$pekerjaan_i}'
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