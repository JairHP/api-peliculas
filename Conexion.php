<?php
	class Conexion {
		private $Host ="";
		private $User ="";
		private $Password ="";
		private $Database ="";
		private $Connection;
	
		public function __construct(){
			$this-> Host = "bwfrobnexh43p4lktatv-mysql.services.clever-cloud.com";
            $this-> User = "uc9m2s5v0tpfqexz";
            $this-> Password = "klSEox1bALqiGznZn6Fb";
			$this-> Database = "bwfrobnexh43p4lktatv";
		}

		public function OpenConnection() {
			try
			{
				$this-> Connection = new PDO("mysql:host={$this->Host}; dbname={$this->Database}" , $this->User , $this->Password);
				$this-> Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				$this-> Connection=false;
			}
		}

		public function CloseConnection(){
			mysql_close($this-> Connection);
		}

		public function GetConnection(){
			return $this-> Connection;
		}
	}
	/*$Obj = new Conexion();
    $Obj-> OpenConnection();
    if($Obj-> GetConnection())
        echo "Ok";
    else 
        echo "Error";*/
 ?>