<?php
	function conn(){
		$servername = "localhost";
		$database = "clon";
		$username = "root";
		$password = "";

		$conn = mysqli_connect($servername, $username, $password, $database);
		return $conn;
	}
?>