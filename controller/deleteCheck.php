<?php

	require_once('../model/userModel.php');
	$id = $_GET['id'];
	$status =  deleteUser($id);

		$status = updateUser($id);
		
		if($status = true){
			echo "Delete Success";
		}else{
			echo "Failed to delete";
		}

?>