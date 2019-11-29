<!-- display previous & upcoming assignments -->
<?php
	session_start();
	require('dbconnect.php');
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
