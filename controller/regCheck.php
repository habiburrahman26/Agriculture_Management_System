<?php

	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$category = $_POST['category'];

		if($password != $repass){
			echo "password and re-type password doesn't match";
		}else{

			$users = [
						'name' => $name,
						'username' => $username,
						'email' => $email,
						'password' => $password,
						'category' => $category
					];

			$myfile = fopen("../model/users.json", 'r');
			$data = fread($myfile, filesize("../model/users.json"));
			$json = json_decode($data, true);
			array_push($json, $users);

			$myfile = fopen("../model/users.json", 'w');
			$write = json_encode($json, JSON_PRETTY_PRINT );

			if(fwrite($myfile, $write))
			{
				header('location:../view/login.html');
			}else{
				echo "registration failed";
			}

		}

	}
	else{
		echo "Invalid request";
	}



?>