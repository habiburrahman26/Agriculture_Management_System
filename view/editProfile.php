<?php
	
	session_start();
	if(!isset($_COOKIE['status']))
	{
		header('location:login.html');
	}



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>Edit Profile</title>
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
	 				<?php include('link.php'); ?>
	 			</ul>
	 		</td>
	 		<td>
	 			<form method="post" action="../controller/profileCheck.php">
	 				<fieldset>
	 					<legend>EDIT PROFILE</legend>
	 					<img src="../assets/user.png" alt="profile" width="100px"><br>
	 					<a href="changeProfilePicture.php">Change</a><br><br>
	 					<table>
	 						
	 						<tr>
	 							<td>Name</td>
	 							<td><input type="text" name="name" value="<?php echo $_SESSION['user']['name'];?>"></td>
	 							<td></td>
	 						</tr>
	 						<tr>
	 							<td>Username</td>
	 							<td><input type="text" name="username" value="<?php echo $_SESSION['user']['username']; 
	 							   ?>"></td>
	 							<td></td>
	 						</tr>
	 						<tr>
	 							<td>Email</td>
	 							<td><input type="text" name="email" value="<?php echo $_SESSION['user']['email']; ?>"></td>
	 							<td></td>
	 						</tr>
	 						
	 					</table>
	 					<hr>
	 					<input type="submit" name="submit" value="submit"><hr>
	 					<a href="changePassword.php">Change Password</a>
	 				</fieldset>
	 			</form>
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