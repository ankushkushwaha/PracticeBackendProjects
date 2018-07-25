<?php 

require "app/libs/Model.php";

class User extends Model {
  
	function __construct() {

		echo "User";

		parent::__construct();	
		// $this->email = $email;
	}
 
	function getEmail() {
		return $this->email;
	}

	static function IdKey() { // AutoIncrement
		return "id";
	}

	static function emailKey() { // primarykey
		return "email";
	}

	static function passwordKey() {
		return "password";
	}

	static function accessTokenKey() {
		return "access_token";
	}

	static function refreshTokenKey() {
		return "refresh_token";
	}
 

	public static function createUser( $email, $password) {


		$emailKey = User::emailKey();
		$passwordKey = User::passwordKey();
		$accessTokenKey = User::accessTokenKey();
		$refreshTokenKey = User::refreshTokenKey();

		$sql = "INSERT INTO users (".$emailKey." ,"
								   .$passwordKey." ,"
								   .$accessTokenKey." ,"
								   .$refreshTokenKey.") VALUES ('$email', '$password', 'qwe', 'sda')";

		$connection = new DBConnection();
		$connection->createOrUpdateQuery($sql);
	}

	public static function getUserToken($email) {
		$sql = "SELECT id, email FROM users WHERE email='$email'";

		$connection = new DBConnection();
		$result = $connection->fetch($sql);


		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "" . $row["id"]. " : " . $row["email"]. " : " . $row["access_token"]. " : " . $row["refresh_token"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
	}
}

?>