<?php

class Defaults {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "tagihan";
		private $table_name2 = "siswa";
		private $table_name3 = "item_tagihan";
		
		// object properties
		public $id;
		public $siswa;
		public $item_tagihan;
		public $akun;
		public $tahun;
		public $bulan;
		public $total;
		// public $juli;
		// public $agustus;
		// public $september;
		// public $oktober;
		// public $november;
		// public $desember;
		// public $januari;
		// public $februari;
		// public $maret;
		// public $april;
		// public $mei;
		// public $juni;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function insert1() {
			// $id				= htmlspecialchars(strip_tags($this->id));
			$siswa			= htmlspecialchars(strip_tags($this->siswa));
			$item_tagihan	= htmlspecialchars(strip_tags($this->item_tagihan));
			$tahun			= htmlspecialchars(strip_tags($this->tahun));
			$bulan			= htmlspecialchars(strip_tags($this->bulan));
			
			$query = "INSERT INTO 
							".$this->table_name."
							(`id`, `siswa`, `item_tagihan`, `tahun`, `bulan`)
						VALUES 
							('', '{$siswa}', '{$item_tagihan}', '{$tahun}', '{$bulan}')";
				
				// prepare query
				$hasil = mysqli_query($this->conn, $query);
				 
				// execute query
				if($hasil){
					return true;
				}else{
					return false;
				}
		}
		
		function insert() {
			$id				= htmlspecialchars(strip_tags($this->id));
			$siswa			= htmlspecialchars(strip_tags($this->siswa));
			$item_tagihan	= htmlspecialchars(strip_tags($this->item_tagihan));
			$tahun			= htmlspecialchars(strip_tags($this->tahun));
			
			$sql = "SELECT * FROM `tagihan` WHERE `siswa`='".$siswa."' AND `item_tagihan`= '".$item_tagihan."'";
			$result = mysqli_query($this->conn, $sql);
			$ketemu = mysqli_num_rows($result);
			
			if($ketemu>0){
				return false;
			}
			else{
				$query = "INSERT INTO 
							".$this->table_name."
							(`id`, `siswa`, `item_tagihan`,`tahun`)
						VALUES 
							('', '{$siswa}', '{$item_tagihan}', '{$tahun}')";
				
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
		
		function insertPangkal() {
			// $id				= htmlspecialchars(strip_tags($this->id));
			$siswa			= htmlspecialchars(strip_tags($this->siswa));
			$item_tagihan	= htmlspecialchars(strip_tags($this->item_tagihan));
			$tahun			= htmlspecialchars(strip_tags($this->tahun));
			
			$sql = "SELECT * FROM `tagihan` WHERE `siswa`='".$siswa."' AND `item_tagihan`= '".$item_tagihan."'";
			$result = mysqli_query($this->conn, $sql);
			$ketemu = mysqli_num_rows($result);
			
			if($ketemu>0){
				return false;
			}
			else{
				$query = "INSERT INTO 
								".$this->table_name."
								(`id`, `siswa`, `item_tagihan`, `tahun`)
							VALUES 
								('', '{$siswa}', '{$item_tagihan}', '{$tahun}')";
					
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
		
		function update() {
			// $id				= htmlspecialchars(strip_tags($this->id));
			$siswa			= htmlspecialchars(strip_tags($this->siswa));
			$item_tagihan	= htmlspecialchars(strip_tags($this->item_tagihan));
			$bulan			= htmlspecialchars(strip_tags($this->bulan));
			$total			= htmlspecialchars(strip_tags($this->total));
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`".$bulan."`='{$total}' 
						WHERE 
							`siswa`='{$siswa}' AND `item_tagihan`='".$item_tagihan."'";
			
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
			// $query = "SELECT s.id,s.unit,s.level,s.ruangan,COUNT(t.siswa) as siswa,t.item_tagihan,s.nisn,s.nama,i.item_bayar
						// FROM `siswa` as s, `item_tagihan` as i, `tagihan` as t
						// WHERE s.level=i.kelas AND t.siswa=s.id AND t.status=0
						// GROUP BY t.siswa";
			
			$query = "SELECT count(t.id) as total,siswa,s.nama,s.unit,s.level,s.ruangan,item_tagihan,tahun
						FROM `tagihan` as t, `siswa` as s
						WHERE t.siswa=s.id
						GROUP BY t.siswa";
			
			//$query = "SELECT * FROM ".$this->table_name;
		 
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
			$query = "SELECT * FROM ".$this->table_name." WHERE siswa ='".$this->id."' LIMIT 0,1";
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			$row = mysqli_fetch_array($hasil);
			
			return $row;
		}
		
		function bayaran() {
			
			// select all query
			$query = "SELECT * FROM ".$this->table_name." WHERE siswa=".$this->siswa;
		 
			// prepare query statement
			$hasil = mysqli_query($this->conn, $query);
			 
			// execute query
			$data = null;
			while($row = mysqli_fetch_array($hasil)) {
				$data[] = $row;
			}
			 
			return $data;
		}
		
		function detail() {
			
			// select all query
			// $query = "SELECT s.id,s.unit,s.level,s.ruangan,COUNT(t.siswa) as siswa,t.item_tagihan,s.nisn,s.nama,i.item_bayar
						// FROM `siswa` as s, `item_tagihan` as i, `tagihan` as t
						// WHERE s.level=i.kelas AND t.siswa=s.id AND t.status=0
						// GROUP BY t.siswa";
			
			$query = "SELECT siswa,item_tagihan,tahun,juli,agustus,september,oktober,november,desember,januari,februari,maret,april,mei,juni
						FROM `tagihan` as t
						WHERE t.siswa=".$this->siswa;
			
			//$query = "SELECT * FROM ".$this->table_name;
		 
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