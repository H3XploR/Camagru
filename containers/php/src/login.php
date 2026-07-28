<?php
	session_start();
    echo "<form method='post' accept='name' name='Connection' action='connection.php'>";
	echo "<label>";
	echo "Username:";
	echo "<input name='username' autocomplete='username' />";
	echo "</label>";
	echo "<label>";
	echo "Password:";
	echo "<input name='password' autocomplete='password' />";
	echo "</label>";
	echo "<button>Connect</button>";
	echo "<p>Tu n'a pas encore de compte?</p>";
	echo "<a href='register.php'>Créer un compte</a>";
	echo "</form>";
?>