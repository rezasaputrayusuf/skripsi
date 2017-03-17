<?php
	class Database{
		 
		// specify your own database credentials
		private $host = "localhost";
		private $db_name = "misbah";
		private $username = "root";
		private $password = "kucing";
		public $conn;
		 
		// get the database connection
		public function getConnection(){
		 
			$this->conn = null;
			 
			try{
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			}catch(PDOException $exception){
				echo "Connection error: " . $exception->getMessage();
			}
			 
			return $this->conn;
		}
		
		public function getConnectionMysqli(){
		 
			$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db_name) or die(mysql_error());

            return $this->con;
		}
	}
	
	function trace($arr) {
        echo "<pre>",print_r($arr),"</pre>";
    }
?>