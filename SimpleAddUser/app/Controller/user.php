<?php 

// require "app/Model/User.php";
	// require "User.php";

	// require ".. /libs/Database.php";

 //    $email = $_POST["name"]
 //    $password = $_POST["password"]


	// User::createUser($email, $password);

	// User::getUserToken("ankush.starcut.com");

/**
 * 
 */
class user
{
	
	function __construct()
	{
		echo "\nuser Controller Init";
		
	}

	public function addUserFunction() {
		echo "\naddUserFunction()";
	}

	public function userEmail($id) {
		echo "\n userEmail() $id ";
	}

}
		
?>