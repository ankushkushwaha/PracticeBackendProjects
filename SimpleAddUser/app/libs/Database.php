<?php

require 'app/Config/dbconfig.php';

/**
 * 
 */
class Database extends PDO
{
	
	function __construct()
	{
		echo "\nDatabase";

		try {
    		$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USERNAME, PASSWORD);
   			 echo "\nConnected to DB at $host successfully";
		} catch (PDOException $pe) {
  			  die("\nCould not connect to the database $dbname :" . $pe->getMessage());
		}

	}
}
?>