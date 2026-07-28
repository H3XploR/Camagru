<?php
	if (count($_SESSION) == 0) {
		echo "Vous n'etes pas connecté";
	}
	else {
		echo "Bienvenue ".$_SESSION['username'];
	}
?>