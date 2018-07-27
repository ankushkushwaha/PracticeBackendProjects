<?php

/**
 * 
 */
class Controller
{

	function __construct()
	{
		echo "\nBase Controller init";
		
	}

	function loadModel($controllerName) {

		$path = "app/Model/".strtolower($controllerName)."_model.php"; // model file path
		echo "\n$path";

		require $path;

		echo "\nmodelName";

		$modelName = $controllerName."_Model";
		echo "\n$modelName";

		$this->model = new $modelName(); // init model

	}
}
?>