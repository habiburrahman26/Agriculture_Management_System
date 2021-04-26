<?php

	$file_info = $_FILES['myfile'];

	$ext= explode('.', $file_info['name']);
	$path ='../assets/'.time().".".$ext[1];

	if(move_uploaded_file($file_info['tmp_name'], $path)){
		 echo "success";
	}else{

		 echo "error";
	 }
?>