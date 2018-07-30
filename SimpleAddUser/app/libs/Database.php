<?php

require 'app/Config/dbconfig.php';

/**
 * 
 */
class Database
{
	
	function __construct()
	{
		echo "\nDatabase init";

		try {
    		$this->conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USERNAME, PASSWORD);
    		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   			 echo "\nConnected to DB at $host successfully";
		} catch (PDOException $pe) {
  			  die("\nCould not connect to the database $dbname :" . $pe->getMessage());
		}

	}
}
?>