<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>Change Profile Picture</title>
</head>
<body>

	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as Adnan | 
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
	 			<from>
	 			<fieldset>
	 				<legend>CHANGE PROFILE PICTURE</legend>
	 				<table>
	 					<tr>
	 						<td><img src="../assets/user.png" width="100px" height="100px"></td>
	 					</tr>
	 					<tr>
	 						<td>
	 							<input type="file" name="img">
	 						</td>
	 					</tr>
	 				</table>
	 				<hr>
	 				<input type="submit" name="submit" value="Upload">
	 			</fieldset>
	 		</from>
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
