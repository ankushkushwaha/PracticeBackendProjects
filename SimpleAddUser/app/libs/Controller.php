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

		$path = ROOT_PATH_VIEW."/".strtolower($folderName)."/index.php"; // model file path
		require $path;

	}

	function loadModel($controllerName) {

		$path = ROOT_PATH_MODEL."/".strtolower($controllerName)."_model.php"; // model file path
		require $path;

		$modelName = $controllerName."_Model";

		$this->model = new $modelName(); // init model

	}
}
?>