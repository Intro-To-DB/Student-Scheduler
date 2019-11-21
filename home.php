<!-- display courses -->
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php echo("<title>" . $_SESSION["username"] . "'s Homepage</title>"); ?>
</head>
<body>
	<?php echo("<p>Welcome to your homepage, " . $_SESSION["username"] . ".</p>"); ?>
	<table>
		<th><b>Courses</b></th>
		<tr><td><button>Fake Course 1</button></td></tr>
		<tr><td><button>Fake Course 2</button></td></tr>
		<tr><td><button>Fake Course 3</button></td></tr>
		<tr><td><button>Fake Course 4</button></td></tr>
		<tr><td><button>Fake Course 5</button></td></tr>
	</table>
</body>
</html>
