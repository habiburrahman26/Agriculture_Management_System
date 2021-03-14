<?php


	$file_info = $_FILES['profileImage'];


	$ext = explode('.', $file_info['name']);
	$path = '../assets/profilePicture/'.time().'.'.$ext[1];

	if($ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpeg')
	{

		if($file_info['size'] < 4000000)
		{
			if (move_uploaded_file($file_info['tmp_name'], $path)) 
			{
				echo "profille picture upload successfully";
			}
			else{
				echo "error";
			}
		}
		else{
			echo "you file size can't be greater than 4MB";
		}
		
	}
	else{
		echo "png, jpg and jpeg file are allow";
	}


?>