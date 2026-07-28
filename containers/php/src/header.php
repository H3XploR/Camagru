<?php
	if (count($_SESSION) == 0 || $_SESSION['user_id'] == NULL || $_SESSION['username'] == NULL) {
		echo '<nav><a href="login.php">Login</a><a href="register.php">Register</a></nav>';
	}
	else {
		echo '<nav><a href="logout.php">Logout</a></nav>';
	}
?>
