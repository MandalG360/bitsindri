<?php
session_start();

if(!isset($_SESSION["session_id"])){
	header("Location: ../index.php");
	die();
}

session_unset(); 
session_destroy();
header("location: ../login.php?done=You have Logged out Successfully");
mysqli_close($conn);
die();

?>