<?php


function myConnect(){
	$servername = "mysql";
	$username = "root";
	$password = "";
	$db="idtest";

	static $conn;
	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		//echo "Connected successfully";	
	}
	return $conn;
}



?>