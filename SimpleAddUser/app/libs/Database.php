<?php

require 'app/Config/dbconfig.php';

/**
 * 
 */
class Database extends PDO
{
	
	function __construct()
	{
		echo "Database";

		try {
    		$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USERNAME, PASSWORD);
   			 echo "Connected to DB at $host successfully.";
		} catch (PDOException $pe) {
  			  die("Could not connect to the database $dbname :" . $pe->getMessage());
		}

	}
}
?>