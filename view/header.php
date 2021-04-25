<?php

	    if(!isset($_COOKIE['status'])){
		header('location: login.html');
	    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../assets/002-planting.png">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/icon/flaticon.css">
    <script type="text/javascript" src="script.js"></script>
</head>