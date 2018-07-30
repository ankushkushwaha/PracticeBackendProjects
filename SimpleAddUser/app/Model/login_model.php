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

		try {
		 	$sql = $this->db->conn->prepare("SELECT id FROM users WHERE email = '$email' AND password = '$password'");

			$data = $sql->fetchAll();
			echo "\n$data";
			
			$count = $sql->rowCount();
			echo $count;

			if ($count > 0) {
				//login
			} else {
				// show error
			}

		}
		catch(PDOException $e) {
    		echo "Error: " . $e->getMessage();
		}

		

		
	 }
}

?>