<?php
	echo '<form enctype="multipart/form-data" action="get_file.php" method="POST">';
	echo '<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />';
	echo 'Envoyez ce fichier : <input name="userfile" type="file" />';
	echo '<input type="submit" value="Envoyer le fichier" />';
	echo '</form>';
?>
