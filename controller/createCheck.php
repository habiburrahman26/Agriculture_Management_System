<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "Invalid information.	Please try again!";
		}else{

			if($password == $repass){
				
				$user = [
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/list.php');
				}else{
					echo "Something Error";
				}

			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>