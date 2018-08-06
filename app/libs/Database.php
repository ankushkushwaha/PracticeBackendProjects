<?php

require ROOT_PATH_CONFIG.'/dbconfig.php';

/**
 * 
 */
class Database
{
	
	function __construct()
	{
		echo "\nDatabase init";
    	
    	$this->conn = new mysqli(HOST, USERNAME, PASSWORD, DB_NAME);

   			if ($this->conn->connect_error) {
  		 		 die("\nConnection to DB failed: " . $conn->connect_error);
			} else {
				echo "\nConnnection to DB Success";
			}

	}

	public function __destruct()
	{
		echo "\nDatabase Connection closed";

	   	mysql_close($this->conn);
	}
}
?>