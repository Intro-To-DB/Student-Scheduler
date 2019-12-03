<!-- display previous & upcoming assignments -->
<?php
	session_start();
	require('dbconnect.php');

	// Check if the user is logged in, if not then redirect to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    		header("location: login.php");
    		exit;
	}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<?php
		echo("Assignments for " . $_POST['crsName'] . ":");
	?>
</body>
</html>
