<?php include 'src/header.php';

	session_start();
	session_destroy();
	header("Location:/");

?>