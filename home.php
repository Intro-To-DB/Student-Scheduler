<!-- display courses -->
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
	<?php echo("<title>" . $_SESSION["username"] . "'s Homepage</title>"); ?>
</head>
<body>
	<?php
		echo($_SESSION['username'] . "<br>" . $_SESSION['userType'] . "<br><br>");
		$idArr = array();
		$query = mysqli_query($SDB, "SELECT enID, crsID FROM enrolled WHERE userID='" . $_SESSION['userID'] . "'");
		while($data = mysqli_fetch_assoc($query)){
			$idArr[$data['enID']] = $data['crsID'];
		}
		$crs_query = mysqli_query($SDB, "SELECT crsName FROM course WHERE crsID IN (" . implode(', ', $idArr) . ")");
		echo("Enrolled courses for " . $_SESSION['username'] . ": <br>");
		$crsArr = array();
		while($crs_data = mysqli_fetch_assoc($crs_query)){
			$crsArr[] = $crs_data['crsName'];
		}
		?>
	<div id="course_table">
		<?php
			foreach($crsArr as $item){
				echo("<form id='" . $item . "' method='post' action='assignments.php'>");
				//echo("<input type='hidden' name='crsName' value='" . $item . "'>");
				echo("<input type='submit' name='crsName' value='" . $item . "'>");
				echo("</form>");
			}
		?>
	</div>
	<div id="home_footer">
		<br>
		<form id="logout_button" action="logout.php">
			<input type="submit" name="logout" value="Logout"/>
		</form>
	</div>
</body>
</html>
