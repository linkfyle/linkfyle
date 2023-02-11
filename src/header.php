<?php
	@ob_start();
	@session_start();
	include 'connect.php';
	/*$userques=$db->prepare("SELECT * FROM user where user_id=:id");
	$userques->execute(array(
		'id' => 'user_id'
	));
	$giveuser=$userques->fetch(PDO::FETCH_ASSOC);*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>LinkFyle</title>
		<link rel="stylesheet" type="text/css" href="src/style.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link rel="icon" href="image/icon.png" type="image/x-icon" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	</head>
	<body>