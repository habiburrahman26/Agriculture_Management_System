<?php

	require_once('../model/db.php');

	function insertCategory($categoryName){
		$conn = getConnection();
		$sql = "insert into category values('', '{$categoryName}')";
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function deleteCategory($id){
		$conn = getConnection();
		$sql = "delete from category where id='{$id}'";
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function updateCategory($categoryName, $id){
		$conn = getConnection();
		$sql = "update category set categoryName = '{$categoryName}' where id = '{$id}'";
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function getAllCategory(){
		$conn = getConnection();
		$sql = "select * from category";
		$result = mysqli_query($conn, $sql);
		$category = [];

		while ($row = mysqli_fetch_assoc($result)) {

			array_push($category, $row);
		}
		return $category;
	}

	function getCategoryById($id){
		$conn = getConnection();
		$sql = "select * from category where id = '{$id}'";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);

		return $row;
	}

?>