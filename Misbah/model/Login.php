<?php

class Login {
	
	// koneksi database and nama table
		private $conn;
		private $table_name = "users";
		
		// object properties
		public $name;
		public $username;
		public $password;
		
		// constructor dengan $db sebagai koneksi database
		public function __construct($db){
			$this->conn = $db;
		}
		
		function logged_in() {
			// $id				= htmlspecialchars(strip_tags($this->id));
			$username			= htmlspecialchars(strip_tags($this->username));
			$password			= htmlspecialchars(strip_tags($this->password));
			
			$sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
				
			$result = mysqli_query($this->conn, $sql);
			$ketemu = mysqli_num_rows($result);
			
			if($ketemu>0){
				session_start();
				$_SESSION['login'] = TRUE;
				$_SESSION['user'] = $this->name;
				echo "<script>alert('Berhasil login'); window.location.href='./home.php'</script>";
			}else {
				session_start();
				return false;
				$_SESSION['login'] = TRUE;	
				echo "<script>alert('GAGAL'); window.location.href='./login.php'</script>";
			}
			// $r = mysqli_fetch_array($sql);
			// $ketemu = mysqli_num_rows($sql);
			// if($ketemu>0) {
				// session_start();
				// $_SESSION['login'] = TRUE;
				// $_SESSION['user'] = $user;
			// }
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
							(`id`, `siswa`, `item_tagihan`, `tahun`)
						VALUES 
							('', '{$siswa}', '{$item_tagihan}',  '{$tahun}')";
				
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
			$status			= htmlspecialchars(strip_tags($this->status));
			
			$query = "UPDATE ".$this->table_name." 
						SET 
							`status`='{$status}' 
						WHERE 
							`siswa`='{$siswa}' AND `item_tagihan`='pangkal'";
			
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