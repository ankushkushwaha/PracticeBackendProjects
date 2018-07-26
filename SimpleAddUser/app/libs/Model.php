<?php /**
 * 
 */

require "Database.php";

class Model extends Database
{
	
	function __construct()
	{

		echo "\nModel";

		parent::__construct();	


	}
} ?>