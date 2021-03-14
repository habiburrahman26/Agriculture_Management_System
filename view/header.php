<?php
	
	if (!isset($_COOKIE['status'])) {
		header('location: login.html');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title><?=$title?></title>
</head>
<body>