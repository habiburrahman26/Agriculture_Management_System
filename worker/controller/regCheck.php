<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$dob		= $_POST['dob'];
		$bio		= $_POST['bio'];
		$con		= $_POST['con'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $dob == ""|| $bio == ""||$con == ""|| $password == ""){
			echo "Invalid information.	Please try again!";
		}else{

			if($password == $repass){

				$user = [
							'id'		=>1, 
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'dob'		=>$dob,
							'password'	=>$password,
							'pass1'		=>$pass1,
							'pass2'		=>$pass2,
							'repass'	=>$repass
						];

				$status = insertUser($user);

				if($status = true){
					header('location: ../view/login.html');
				}else{
					echo " error";
				}

				header('location: ../view/login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>
