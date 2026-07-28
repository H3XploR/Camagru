<?php
	session_start();
	$_SESSION['user_id'] = NULL;
	$_SESSION['username'] = NULL;
	session_write_close();
	header("Location: index.php");
	error_log('page logout.php lance');
	exit();
?>
