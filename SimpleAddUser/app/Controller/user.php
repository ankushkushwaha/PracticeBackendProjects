<?php 

/**
 * 
 */
class User extends Controller
{

	private $model;

	function __construct()
	{
		parent::__construct();

		echo "\nuser Controller Init";

		$path = "app/Model/".strtolower(get_class($this))."_model.php"; // model file path

		require $path;

		$this->model = new User_Model(); // init model
		
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