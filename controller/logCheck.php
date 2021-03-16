<?php
	
	session_start();
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$myfile = fopen("../model/users.json", 'r');
		$data = fread($myfile, filesize("../model/users.json"));
		$json = json_decode($data, true);

		foreach($json as $user)
		{
			$name = $user['name'];
			$usernam = $user['username'];
			$email = $user['email'];
			$pass = $user['password'];
			$category = $user['category'];
			
			if($username == $usernam && $password == $pass && $category== 'admin')
			{

				setcookie('name', $name, time()+5000,'/');
				setcookie('username', $username, time()+5000, '/');
				setcookie('email',$email, time()+5000, '/');
				setcookie('password', $password, time()+500, '/');
				$_SESSION['status'] = true;
				
				$flag = true;
			}
		}
		if($flag == true)
		{
			
			header('location: ../view/Dashboard.php');
		}
		else{
			echo "Invalid User";
		}

	}
	else
	{
		echo "Invalid request";
	}


?>