<?php
	if (count($_SESSION) == 0 || $_SESSION['user_id'] == NULL || $_SESSION['username'] == NULL) {
		echo "Vous n'etes pas connecté";
	}
	else {
		echo "Bienvenue ".$_SESSION['username'];
	}
?>
