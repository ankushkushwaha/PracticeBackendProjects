<?php

/**
 * 
 */
class ErrorController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	
		echo "\nErrorController init";

		$this->renderView(get_class($this));

	}

	public function __destruct()
	{
		echo "\nErrorController deinit";

	}
}
?>