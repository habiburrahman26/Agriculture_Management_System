<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>Dashboard</title>
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
	 			<fieldset>
	 				<legend>Add User</legend>

	 				<table>
	 				<tr>
					<td>Name </td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Re-type password</td>
					<td><input type="password" name="repass"></td>
				</tr>

	 			</table>
	 			<br>
	 			<table>
				<tr>
					
					Category:
					<input type="radio" name="radio" value="farmer">Farmer
					
					<input type="radio" name="radio" value="buyer">Buyer
					<input type="radio" name="radio" value="worker">Worker
				
				</tr>
			</table>
				<hr>
			<table>
				<tr>
					<td><input type="submit" name="submit" value="Add User"></td>
				</tr>
			</table>
	 		</fieldset>
	 			
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
