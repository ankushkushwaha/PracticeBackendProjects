<?php
/**
 * 
 */
class Bootstrap {
	
	function __construct() {
		

		echo "\nBootstrap";

		$url = $_GET['url'];
		$url = rtrim($url, '/'); // trim all multiple '/' e.g in user/func////

		$url = explode('/', $url);

		print_r($url);
		 

		$file = "app/Controller/".$url[0]. ".php";


		if (file_exists($file)) {

			require $file;

		} else {

			die ("\nFile $file Does not exist");
			
		}
		echo "\nBootstrap";


		  $controller = new $url[0]();

		  $func = $url[1];
		  $param = $url[2];

		  if (isset($param)) { // for function with only one paramaters
		    $controller->{$func}($param);

		  } else  if (isset($func)) { // without paramaters

		      $controller->{$func}();
		  } 	
	}
}

?>