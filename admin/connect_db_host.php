<?php
	date_default_timezone_set("Asia/Kolkata");
	
	$servername = "sql106.byethost7.com";
	$username = "b7_28075663";
	$password = "Ashish@123#";
	$dbname = "b7_28075663_bitsindri";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!$conn) {
	 die("Connection Failed!"); // $link->connect_error
	} 
?>          