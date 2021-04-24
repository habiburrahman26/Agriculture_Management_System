<?php
	
	require_once('db.php');

	
	function validateUser($username, $password){
		$conn = getConnection();
		$sql = "select * from workers where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into workers values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from workers where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from workers";
		$result = mysqli_query($conn, $sql);
		$workers = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($workers, $row);
		}

		return $workers;
	}

	function updateUser($user){
		$conn = getConnection();
		$sql = "update workers set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from workers where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>