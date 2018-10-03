<?php  
include './Commons/DB.Config.php';
	/**
	 * 
	 */
	class BaseModel
	{
		public $connection;
		
		function __construct()
		{
			# code...
			try{
				$this->connection = new PDO('mysql:host=' . APP_HOST . ';dbname=' . APP_DBNAME,APP_DBUSERNAME,APP_DBPASSWORD);
				$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch (PDEexception $e){
				echo ("Cannot connect to DB"+$e->getMessage());
			}
		}

		public function getConnection(){

		}

		public function where($array =[]){
			if(count($array) >0){
			$this->query = $this->query 
					. ' where '
					. $array[0] . ' '
					. $array[1] . ' '
					. $array[2] . ' '
					;
			} else {
				echo "Cannot where Query";
			}
			return $this;
		}

		public function getAll(){
			$queryData=$this->connection->prepare($this->query);
			$queryData->setFetchMode(PDO::FETCH_CLASS,get_class($this));
			$queryData->execute();
			$result = $queryData->FetchAll();

			return $result;
		}
		public function getOne(){
			$queryData=$this->connection->prepare($this->query);
			$queryData->setFetchMode(PDO::FETCH_CLASS,get_class($this));
			$queryData->execute();
			$result = $queryData->Fetch();

			return $result;
		}


	}
?>