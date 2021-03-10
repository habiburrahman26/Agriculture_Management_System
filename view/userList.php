<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>User List</title>
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
	 				<li><a href="#">View user list</a></li>
	 				<li><a href="addProductCategory.php">Add Product Category</a></li>
	 				<li><a href="categoryList.php">Product category list</a></li>
	 				<li><a href="addTools.php">Add tools</a></li>
	 				<li><a href="#">view tools</a></li>
	 				<li><a href="">Report</a></li>
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<h2>User List</h2>
	 			<table border="1">
	 				<tr>
	 					<td>Name</td>
	 					<td>Username</td>
	 					<td>Email</td>
	 					<td>Action</td>
	 				</tr>
	 				<tr>
	 					<td>Md.Habibur Rahman</td>
	 					<td>Habibur Rahman</td>
	 					<td>habib2645@gmail.com</td>	
	 					<td>
	 						<a href="">EDIT</a> |
	 						<a href="">DELETE</a>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>Adnan Anik</td>
	 					<td>Anik </td>
	 					<td>anik12@gmail.com</td>	
	 					<td>
	 						<a href="">EDIT</a> |
	 						<a href="">DELETE</a>
	 					</td>	
	 				</tr>

	 			</table>
	 			
	 		</td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>