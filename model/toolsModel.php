<?php

	require_once('db.php');

	function insertTools($toolsName, $price, $description, $fileName){
		$conn = getConnection();
		$sql = "insert into tools values('', '{$toolsName}','{$price}','{$description}','{$fileName}')";

	    if(mysqli_query($conn,$sql)){
	    	return true;
	    }else{
	    	return false;
	    }
	}

	function deleteTools($id){
		$conn = getConnection();
		$sql = "delete from tools where id = '{$id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateTools($toolsName, $price, $description,$id){
		$conn = getConnection();
		$sql = "update tools set name = '{$toolsName}', price = '{$price}', description = '{$description}' where id = '{$id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllTools(){
		$conn = getConnection();
		$sql = "select * from tools";
		$result = mysqli_query($conn, $sql);
		$tools = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($tools, $row);
		}
		return $tools;
	}

	function getToolById($id){
		$conn = getConnection();
		$sql = "select * from tools where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

?>