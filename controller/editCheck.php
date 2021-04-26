<?php

	require_once('../model/userModel.php');
	$id = $_GET['id'];
	$user= getAllUser();
	
	if(isset($_POST['submit'])){

		$user = [ 
					'name'       => $_POST['name'],
					'username'   => $_POST['username'],
					'email'      => $_POST['email'],
					'password'   => $_POST['password']
		        ];

		$status = updateUser($user, $id);
		if($status){
			echo "Success";
		}else{
			echo "Failed";
		}
	}
	
?>
