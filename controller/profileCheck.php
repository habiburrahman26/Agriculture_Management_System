<?php
	
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$username1 = $_POST['username'];
		$email1 = $_POST['email'];


			$myfile = fopen("../model/users.json", 'r');
			$data = fread($myfile, filesize("../model/users.json"));
			$json = json_decode($data, true);

			foreach ($json as $key => $value) 
			{
				$username = $value['username'];
				$password = $value['password'];

				if($username == $_COOKIE['username'] && $password == $_COOKIE['password'])
				{
					$json[$key]['name']=$name;
					$json[$key]['username'] = $username1;
					$json[$key]['email'] = $email1;


					$myfile = fopen("../model/users.json", 'w');
					$write = json_encode($json, JSON_PRETTY_PRINT );


					if(fwrite($myfile, $write))
					{
						echo "success";
						setcookie('name',$name,time()+5000,'/');
						setcookie('username',$username1,time()+5000,'/');
						setcookie('email',$email1,time()+5000,'/');
					}else
					{
						echo "registration failed";
					}

				} 
			}
			
	}
	else
	{
		echo "Invalid request";
	}



?>