<?php

/**
 * 
 */
class Login_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();

		echo "\nLogin_model init";
	}

	 public function run() {

	 	$email = $_POST['email'];
	 	$password = $_POST['password'];

		$statement = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		echo "\n$statement";

	 	$result = $this->db->conn->query($statement);

	 	if ($result->num_rows > 0) {

		    // while($row = $result->fetch_assoc()) {
		    //     echo "\nid: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["password"];
		    // }
		    
		} else {
		    echo "0 results";
		}
	 }

	public function __destruct()
	{
		echo "\nLogin Model deinit";

	}

}

?>