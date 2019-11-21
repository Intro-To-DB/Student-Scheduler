<!-- authenticate login information and set session variables -->
<?php
	session_start();
	$postUser = $_POST['username'];
	$postPass = $_POST['password'];
?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
	<?php
	//FOR DEBUG
	echo("Username: " . $postUser . "<br>");
	echo("Password: " . $postPass);
	?>
	<?php
	//confirm username & password combo exists in DB
	// V SPOOFED V
	if($postUser == "Gary" && $postPass == "garyPass"){
		$_SESSION["username"] = $postUser;
		header("Location: ./home.php");
	} else {
		header("Location: ./login.php");
	}
	?>
</body>
</html>
