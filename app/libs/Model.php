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

	public function __destruct()
	{
		echo "\nBase Model deinit";

	}
} ?>