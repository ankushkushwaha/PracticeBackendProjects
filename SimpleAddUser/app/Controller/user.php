<?php 

/**
 * 
 */
class User extends Controller
{
	function __construct()
	{
		parent::__construct();

		echo "\nuser Controller Init";

		 $this->loadModel(get_class($this));
		
	}

	public function other() {

		if (isset($this->model) == true) {
			echo "\nother()";
		}
	}

	public function userEmail($id) {
		echo "\nuserEmail() $id";
	}

}
		
?>