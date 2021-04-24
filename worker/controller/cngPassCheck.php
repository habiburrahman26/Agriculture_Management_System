<?php
	session_start();
	
	if(isset($_POST['submit'])){
			
		$password	= $_POST['password'];	//current 
		$pass2 		= $_POST['pass2'];	//new
		$repass		= $_POST['repass'];	//retype
		
		//$password	= $_SESSION['password'];	//current Password
			
		if($password == "" || $pass2 == "" || $repass == ""){
			echo " Null submission...!";
		}elseif ($password == $pass2){
			echo " New Password may not same";
		}elseif ($pass2 != $repass){
			echo " "." password mismatch";
		}elseif ($pass2 == $repass){
			echo "Password Match";
		}else{
			
			//$id	= $_COOKIE['id'];
			//require_once('../model/userModel.php');
			$conn =	getConnection();
			$sql = "update workers set password= '{$pass2}' where id= '{$id}'";
			
			if(mysqli_query($conn,$sql)){
				echo "Successfully change";
			}else{
				echo "Not change";
			}
		}
	}
?>


