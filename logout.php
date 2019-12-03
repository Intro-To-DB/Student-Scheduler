<!--log user out and remove session variables-->
<?php
	// Check if the user is logged in at all, if not then redirect to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    		header("location: login.php");
    		exit;
	}

	session_start();
	session_unset();
	session_destroy();
	header("Location: ./login.php");
	exit();
?>
