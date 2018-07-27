<?php /**
 * 
 */

require "Database.php";

class Model
{
	
	function __construct()
	{
		echo "\nBase Model init";

		$this->db = new Database();
	}
} ?>