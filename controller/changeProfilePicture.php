<?php
	

	if (isset($_POST['submit'])) {

		$file_info = $_FILES['profile_img'];
		$ext = explode('.', $file_info['name']);

		$path = '../assets/profile/'.time().'.'.$ext[1];
		$fileName = time().'.'.$ext[1];

		if($ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpeg')
			{

				if($file_info['size'] < 5000000)
				{
					if (move_uploaded_file($file_info['tmp_name'], $path)) 
					{
						require_once('../model/userModel.php');
						$id = $_COOKIE['id'];
						$status = profilePicture($id,$fileName);

				    	if($status){
				    		header('location:../view/changeProfilePicture.php?id='.$id);
				    		}else{
				    			 echo "profile picture not update";
				    		}
								
					}else{
							echo "error_occur";
						}
					}else{
							echo "you file size can't be greater than 5MB";
						}
				}
				else{
					echo "png, jpg and jpeg file are allow";
				}
	}

?>