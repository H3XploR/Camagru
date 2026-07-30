<?php
		$output = shell_exec('pwd');
	error_log("[BASH_CMD]: " . $output);
	$output = shell_exec('[ -e /var/www/uploads ] && echo "The file exists" || echo "The file does not exist"');
	error_log("[BASH_CMD]: " . $output);
	if (trim($output) === 'The file does not exist') {
		error_log('exiting');
		exit();
	}
	$uploaddir = '/var/www/uploads/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	    echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
	} else {
	    echo "Erreur lors du déplacement du fichier téléchargé.\n";
	}

	echo 'Voici quelques informations de débogage :';
	print_r($_FILES);
	echo '</pre>';

?>
