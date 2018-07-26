<?php 

/**
 * 
 */
class user extends Controller
{
	
	function __construct()
	{
		parent::__construct();

		echo "\nuser Controller Init";
		
	}

	public function other() {

		echo "\nother()";

		require "app/Model/user_model.php";

		new User_Model();
	}

	public function userEmail($id) {
		echo "\nuserEmail() $id";
	}

}
		
?>