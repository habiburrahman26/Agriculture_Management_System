<?php
	
	session_start();
	$title = "View Profile";
	include('header.php');
?>

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
	 		</td>
	 		<td>
	 			<form>
	 			<fieldset>
	 				<legend>VIEW PROFILE</legend>
	 				<img src="../assets/user.png" alt="profile" width="100px" ><br>
	 				
	 				<table>

	 					<tr height="30px">
	 						<td width="100px">Name</td>
	 						<td>:<?php echo $_SESSION['user']['name'];?></td>
	 						
	 					</tr>
	 					<tr height="30px">
	 						<td>Username</td>
	 						<td>:<?php echo $_SESSION['user']['username']; ?></td>
	 						
	 					</tr>
	 					<tr height="30px">
	 						<td>Email</td>
	 						<td width="200px">:<?php echo $_SESSION['user']['email']; ?></td>
	 					</tr>
	 					
	 					
	 				</table>
	 				<hr>
	 				<a href="editProfile.php">Edit Profile</a>
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
