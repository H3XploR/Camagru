<html>

<head>
	<meta charset="utf-8" />
	<title> Camagru </title>
</head>

<body>
	<?php echo "<p> TEST </p>"; ?>
	<p>
		Bienvenue sur le site de Camagru.
	</p>
	<form method="post" accept="name" name="Connection" action="connection.php">
		<label>
			Username:
			<input name="username" autocomplete="username" />
		</label>
		<label>
			Password:
			<input name="password" autocomplete="password" />
		</label>
		<button>Connect</button>
		<p>Tu n'a pas encore de compte?</p>
		<a href="register.php">Créer un compte</a>
	</form>

</body>

</html>