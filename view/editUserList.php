<?php
	
	$title = "Edit User List";
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
	 				<?php  include('link.php'); ?>
	 			</ul>
	 		</td>
	 		<td>
	 			<form method='post' action="#">
	 				<fieldset>
	 					<legend>Edit User</legend>
	 					<table>
	 						<tr>
	 							<td>Name</td>
	 							<td>:<input type="text" name="name" value="<?php  $id = $_GET['id']; if($id == '1'){echo "Md.habibur Rahman";}elseif($id == 2){echo "Adnan Anik";}else{echo'Md.Korim';} ?>"></td>
	 						</tr>
	 						<tr>
	 							<td>Username</td>
	 							<td>:<input type="text" name="username" value="<?php  $id = $_GET['id']; if($id == '1'){echo "Habibur Rahman";}elseif($id == 2){echo "Anik";}else{echo'korim';} ?>"></td>
	 						</tr>
	 						<tr>
	 							<td>Email</td>
	 							<td>:<input type="text" name="email" value="<?php  $id = $_GET['id']; if($id == '1'){echo "habib2645@gmail.com";}elseif($id == 2){echo "anik12@gmail.com";}else{echo "korim@gmail.com";} ?>"></td>
	 						</tr>
	 					</table>
	 					<hr>
	 					<input type="submit" name="submit" value="Update">

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

