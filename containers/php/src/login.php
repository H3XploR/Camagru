<?php
	session_start();
	include_once 'header.php';
    echo "<h1>Login</h1>";
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
	echo "</form>";
?>