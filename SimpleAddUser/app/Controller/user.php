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

	public function addUserFunction() {
		echo "\naddUserFunction()";
	}

	public function userEmail($id) {
		echo "\nuserEmail() $id";
	}

}
		
?>