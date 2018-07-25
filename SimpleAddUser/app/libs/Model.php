<?php /**
 * 
 */

require "Database.php";

class Model extends Database
{
	
	function __construct()
	{

		echo "Model";

		parent::__construct();	


	}
} ?>