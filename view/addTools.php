<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>Add Tools</title>
</head>
<body>
	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as <?php echo $_COOKIE['username']?> | 
 				<a href="../controller/logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="400px">
	 		<td width="300px">
	 			<ul>
	 				<li><a href="Dashboard.php">Dashboard</a></li>
	 				<li><a href="addUser.php">Add User</a></li>
	 				<li><a href="userList.php">View user list</a></li>
	 				<li><a href="addProductCategory.php">Add Product Category</a></li>
	 				<li><a href="categoryList.php">Product category list</a></li>
	 				<li><a href="#">Add tools</a></li>
	 				<li><a href="#">view tools</a></li>
	 				<li><a href="">Report</a></li>
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 			</ul>
	 		</td>
	 	
	 		<td>
	 			<form >
	 				<fieldset>
	 					<legend>ADD TOOLS</legend>
	 					<table>
	 						<tr>
	 							<td width="100px">Add Picture</td>
	 							<td><input type="file" name="tool_img"></td>
	 						</tr>
	 						<tr>
	 							<td>Tools Name</td>
	 							<td><input type="text" name="name" value=""></td>
	 						</tr>
	 						<tr>
	 							<td>Price</td>
	 							<td><input type="text" name="price" value=""></td>
	 						</tr>
	 						<tr>
	 							<td>Describe</td>
	 							<td>
	 								<textarea></textarea>
	 							</td>
	 						</tr>
	 					</table>
	 					<hr>
	 					<input type="submit" name="submit" value="Add">
	 				</fieldset> 
	 			</form>

	 		</td>
	 	</tr>
	 </table>
</body>
</html>