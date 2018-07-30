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

	}

	function open() {
		$this->renderView(get_class($this));
	}

	function run() {
		
		if ($this->model->run()) {
			// loged in

			echo "\n loged in";
			$this->renderView("dashboard");

		} else {			
			require "app/Controller/errorcontroller.php";
			new ErrorController();
		}

	}

	public function __destruct()
	{
		echo "\nLogin Controller deinit";

	}

}
		
?>