<?php
	date_default_timezone_set("Asia/Kolkata");
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bitsindri";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!$conn) {
	 die("Connection Failed!"); // $link->connect_error
	} 
?>          