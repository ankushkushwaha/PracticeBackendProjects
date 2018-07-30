<?php 

/**
 * 
 */

spl_autoload_register(function ($class_name) {
		 include ROOT_PATH_CONTROLLER. '/'. $class_name . '.php';
});

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
			new ErrorController();
		}

	}

	public function __destruct()
	{
		echo "\nLogin Controller deinit";

	}

}
		
?>