<?php 

	$myfile = fopen('../model/users.json', 'r');
	$data = fread($myfile, filesize('../model/users.json'));
	$json = json_decode($data, true);

	
?>