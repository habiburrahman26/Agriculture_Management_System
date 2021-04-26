<?php

	if(isset($_POST['submit'])){
			
		$email = $_POST['email'];
			
		if($email == ""){
			echo "Null Submission";
		}else{
		
			echo "Email Submitted";

		}
	}	
	/*
	/////////////////////////////////??????????
	
	/////////////////////////////????????????????????
	session_start();
	
	if(isset($_POST['submit'])){
			
		$email	=	$_POST['email'];
			
		if($email == ""){
			echo "Null Submission";
		}else{
			
			$status = insertUser($user);

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "Db error";
				}
			header('location: ../view/login.html');
		
			//if($email == $user['email']){
				
			//	$_SESSION['status'] = true;
				
			
			//}else{ echo "no"; }
		}
	}*/
?>

