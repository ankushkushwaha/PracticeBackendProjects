<?php 

/**
 * 
 */
class Login extends Controller
{
	function __construct()
	{
		parent::__construct();

		echo "\nLogin Controller Init";

		$this->loadModel(get_class($this));
		$this->renderView(get_class($this));

	}

	function run() {
		
		$this->model->run();

	}

}
		
?>