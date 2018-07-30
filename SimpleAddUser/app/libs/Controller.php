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

	function renderView($folderName) {

		$path = "app/View/".strtolower($folderName)."/index.php"; // model file path
		require $path;

		$this->model = new $modelName(); // init model

	}

	function loadModel($controllerName) {

		$path = "app/Model/".strtolower($controllerName)."_model.php"; // model file path
		require $path;

		$modelName = $controllerName."_Model";

		$this->model = new $modelName(); // init model

	}
}
?>