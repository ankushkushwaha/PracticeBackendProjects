<?php

/**
 * 
 */
class Cart extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	
		echo "\nCart controller init";

		$this->loadModel(get_class($this));

	}
}
?>