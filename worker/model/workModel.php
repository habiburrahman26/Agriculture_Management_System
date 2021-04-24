<?php
	
	require_once('db.php');

	function validateWork($username, $email){
		$conn = getConnection();
		$sql = "select * from works where username='{$username}' and email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function insertWork($user){
		$conn = getConnection();
		$sql = "insert into works values('', '{$user['username']}', '{$user['task']}', '{$user['email']}', '{$user['period']}', '{$user['location']}', '{$user['salery']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getWorkByID($id){
		$conn = getConnection();
		$sql = "select * from works where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllWork(){
		$conn = getConnection();
		$sql = "select * from works";
		$result = mysqli_query($conn, $sql);
		$works = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($works, $row);
		}

		return $works;
	}

	function updateWork($user){
		$conn = getConnection();
		$sql = "update works set username='{$user['username']}', task='{$user['task']}', email='{$user['email']}', period='{$user['period']}', location='{$user['location']}', salery='{$user['salery']}'  where id={$user['id']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function doneWork($id){
		$conn = getConnection();
		$sql = "delete from works where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>