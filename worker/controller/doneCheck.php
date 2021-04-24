<?php

	require_once('../model/workModel.php');
	$id = $_GET['id'];
	$status =  doneWork($id);

		$status = updateWork($id);
		
		if($status = true){
			echo "Your work successfully done";
		}else{
			echo "Failed to do the work";
		}

?>