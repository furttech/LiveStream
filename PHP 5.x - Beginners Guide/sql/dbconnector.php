<?php  
	/*
        PHP has three seperate form in which a data base 
        communication is fashioned
        1. Object Oriented MySQLi)
        2. PDO style
        3. MySQL Procedural 
        all allow communication but differ in syntax
    */
	/*
	* This class provides a connection to a data base.
	* In this case we are creating a connection to a
	* MySQL database located on the local server.
	*
	* - a data base can be a localhost or 1xx.1xx.xxx.xxx ip
	* - the connection data is passed from the php script on
	*	connection initialization
	*
	*   @author Furt_Tech
	*
	*/	
	class dbConnectionOOP{

		// the variables below have the private keyword
		// this makes them protected from outside access
		private $userName;
		private $password;
		private $host;
		private $dbName;

		// this is the constructor method which initializes
		// the function and private variables
		function __construct(){

			$this->userName = "user";
			$this->password = "password";
			$this->host = "localhost";
			$this->dbName = "furtdb";
		}

		// public function used to return connection object
		// @return sql database connection using object oriented style
		// this object is established with the provided creds
		public function createConOOP(){

			// this creates a connection object with the
			// MySql Server using object oriented method
			$sqlCon = new mysqli($this->host, $this->userName, $this->password, $this->dbName);

			// perform an error check on the connection
			if($sqlCon->connect_error){
				error_log("Connection Failed: ".$sqlCon->connection_error);
			}else{
				error_log("Connected Succesfully");
			}

			// return a connection object for later use
			return $sqlCon;
		}

		public function closeDb($sqlCon){
			$dqlCon->close();
		}

		public function updateDb($sqlCon,$data){

			// this is an example of a prepared statment using UPDATE
			$preS = $sqlCon->prepare("UPDATE random WHERE name = ?");
			// bind the params for safty against injection
			$preS->bind_param("s",$data);
			
			// finally execute the stament and checl for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}

		}

		public function insertDb($sqlCon,$data){
				
			// an example of how not to insert data
			// the most direct and unsafe way to insert into a data base
    		// this offers no protection against msql injection 
    		//$query = "INSERT INTO random (name,age) VALUES (".$data.", 35)";

    		// The possibility exist for the user to enter a string into type or data
    		// that represents an alternative sql query string that will then execute
    		// This vulnerability is known as SQL injection because a user is able to 
    		// inject code into the data base via user input.

			// using prepared statment with MySQLi 
			$preS = $sqlCon->prepare("INSERT INTO random (name) Values (?)");
			// binding the value provided 
			$preS->bind_param("s",$data);
			// execute and check statment for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}
		}

		public function selectDb($sqlCon,$data){

			//init some values to null
			$resultName = NULL;
			$resultAge = NULL;

			// create a prepared statment using a SELECT query
			$preS = $sqlCon->prepare("SELECT name,age FROM random WHERE name = ? ");
			// bind out the data provided by the user to protect against injection
			$preS->bind_param("s",$data);
			// bind a value to store the result
			$preS->bind_result($resultName, $resultAge);
			// execute and check for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}
		}

		public function deleteDb($sqlCon,$data){
			// create a prepared statment using the DELETE query
			$preS = $sqlCon->prepare("DELETE age FROM random WHERE name = ? ");
			// bind the data provided by the user to protect against injection
			$preS->bind_param("s",$data);
			// execute and check for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}
		}
	}

	/*
	* This class provides a connection to a data base.
	* In this case we are creating a connection to a
	* MySQL database located on the local server. This 
	* connection type is known as PDO
	*
	* - a data base can be a localhost or 1xx.1xx.xxx.xxx ip
	* - the connection data is passed from the php script on
	*	connection initialization
	*
	*   @author Furt_Tech
	*
	*/	
	class dbConnectionPDO{
		
		// the variables below have the private keyword
		// this makes them protected from outside access
		private $userName;
		private $password;
		private $host;
		private $dbName;

		// this is the constructor method which initializes
		// the function and private variables
		function __construct(){

			$this->userName = "user";
			$this->password = "password";
			$this->host = "localhost";
			$this->dbName = "furtdb";
		}

		public function createConPDO(){

			try{
				// this creates a connection object with the
				// MySql Server using PDO method
				$PDOCon = new PDO('mysql:host='.$this->host.';dbName='.$this->dbName, $this->userName, $this->password);

				// set error modes
		        $PDOconnector -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $PDOconnector -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

		        error_log("DB Connection Success");

		    } catch (PDOException $e) {
		        // handle exception and alter program flow
		        // you suck and your creds are wrong
		        error_log($e->getMessage());
		    }
			return $PDOCon;
		}

		public function closeDb($sqlCon){
			$sqlCon=null;
		}

		public function updateDb($sqlCon,$data){

			// this is an example of a prepared statment using UPDATE
			$preS = $sqlCon->prepare("UPDATE random WHERE name = ?");
			// bind the params for safty against injection
			//$preS->bindParam(':name',$data);
			
			// finally execute the stament and checl for errors
			if (!$preS->execute([$data])) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}

		}

		public function insertDb($sqlCon,$data){
				
    		// The possibility exist for the user to enter a string into type or data
    		// that represents an alternative sql query string that will then execute
    		// This vulnerability is known as SQL injection because a user is able to 
    		// inject code into the data base via user input.

			// using prepared statment with MySQLi 
			$preS = $sqlCon->prepare("INSERT INTO random (name) Values (:name)");
			// bind userdata to protext against injection
			$preS->bindParam(':name', $data);
			// insert a name
			$preS->execute();
		}

		public function selectDb($sqlCon,$data){

			//init some values to null
			$resultName = NULL;
			$resultAge = NULL;

			// create a prepared statment using a SELECT query
			$preS = $sqlCon->prepare("SELECT name,age FROM random WHERE name = ? ");
			// bind out the data provided by the user to protect against injection
			$preS->bind_param("s",$data);
			// bind a value to store the result
			$preS->bind_result($resultName, $resultAge);
			// execute and check for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}
		}

		public function deleteDb($sqlCon,$data){
			// create a prepared statment using the DELETE query
			$preS = $sqlCon->prepare("DELETE age FROM random WHERE name = ? ");
			// bind the data provided by the user to protect against injection
			$preS->bind_param("s",$data);
			// execute and check for errors
			if (!$preS->execute()) {
        		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    		}
		}
	
	}

	/*
	* This class provides a connection to a data base.
	* In this case we are creating a connection to a
	* MySQL database located on the local server.This 
	* connection type is known as Procedural
	*
	* - a data base can be a localhost or 1xx.1xx.xxx.xxx ip
	* - the connection data is passed from the php script on
	*	connection initialization
	*
	*   @author Furt_Tech
	*
	*/	
	class dbConnectionOPro{

		// the variables below have the private keyword
		// this makes them protected from outside access
		private $userName;
		private $password;
		private $host;
		private $dbName;

		// this is the constructor method which initializes
		// the function and private variables
		function __construct(){

			$this->userName = "user";
			$this->password = "password";
			$this->host = "localhost";
			$this->dbName = "furtdb";
		}

		public function createConPro(){

			// this creates a connection object with the
			// MySql Server using procedural method
			$sqlCon = new mysqli_connect($this->host, $this->userName, $this->password, $this->dbName);

			// perform an error check on the connection
			if(!$sqlCon){
				error_log("Connection Failed: ".$sqlCon->connection_error);
			}else{
				error_log("Connected Succesfully");
			}
			return $sqlCon
		}

		public function insertDb($sqlCon,$data){
				
    		// The possibility exist for the user to enter a string into type or data
    		// that represents an alternative sql query string that will then execute
    		// This vulnerability is known as SQL injection because a user is able to 
    		// inject code into the data base via user input.

			try{

				// using prepared statment with MySQLi 
				$preS = $sqlCon->prepare("INSERT INTO random (name) Values (:name)");
				$preS->bindParam(':name', $data);

				// insert a name
				$preS->execute();
			}catch(PDOException $e){

				error_log("Error INSERT Failed");

			}
		}
	}



?>