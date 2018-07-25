<?php 

/**
 * 
 */
class DBConnection
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "root";
	private $dbname = "backend";

	function createOrUpdateQuery( $sql ) {

		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		if ($conn->query($sql) === TRUE) {
		    echo "executeQuery Success";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    	
		}

		$conn->close();
	}

	function fetch( $sql ) {

		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$result = $conn->query($sql);

		$conn->close();

		return $result;
	}

}

	
?>