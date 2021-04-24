<?php
	
	require_once('db.php');


	function insertProduct($user){
		$conn = getConnection();
		$sql = "insert into product values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductByID($id){
		$conn = getConnection();
		$sql = "select * from product where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$workers = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($workers, $row);
		}

		return $workers;
	}

	function updateProduct($user){
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
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>