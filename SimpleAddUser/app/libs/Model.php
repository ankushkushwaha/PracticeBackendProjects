<?php /**
 * 
 */

require "Database.php";

class Model extends Database
{
	
	function __construct()
	{
		parent::__construct();	

		echo "\nBase Model init";

	}
} ?>