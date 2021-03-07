<!DOCTYPE html>
<html>
<head>
	<title>change Password</title>
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
	 	<tr height="300px">
	 		<td width="300px">
	 			<ul>
	 				<?php include('link.php'); ?>
	 			</ul>
	 		</td>
	 		<td>
	 			<form method="post" action="cngPassCheck.php">
				<fieldset>
				<legend>CHANGE PASSWORD</legend>
				<table>
					<tr>
						<td>Current Password:</td>
						<td><input type="Password" name="currentPass" value=""></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="Password" name="newPass" value=""></td>
					</tr>
					<tr>
						<td>Retype New Password:</td>
						<td><input type="Password" name="retypePass" value=""></td>
					</tr>
			    </table>
			<hr>
			<input type="submit" name="submit" value="submit">
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