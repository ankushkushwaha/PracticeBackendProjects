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

	 	echo "\n model run()";
	 	$sql = $this->db->prepare("SELECT id FROM users WHERE 
	 		email = :email AND password = :password");

		$sql->execute(array(
			':email' => $_POST['email'],
			':password' => $_POST['password']
			));

		$data = $sql->fetchAll();
		echo "$data";
	 }
}

?>