<?php session_start(); ?>
<html>

<head>
	<meta charset="utf-8" />
	<title> Camagru </title>
</head>
<body>
	<h1>
		Camagru
	</h1>
	<?php 
	echo '<nav><a href="login.php">Login</a><a href="register.php">Register</a></nav>';
	if (count($_SESSION) == 0) {
		echo "Vous n'etes pas connecté";
	}
	else {
		echo "Bienvenue ".$_SESSION['username'];
	}
	?>

</body>

</html>