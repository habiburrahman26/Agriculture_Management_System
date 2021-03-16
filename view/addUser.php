<?php

	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$category = $_POST['category'];


		if($password != $repass)
		{
			echo "password and re-type password doesn't match";
		}
		else
		{
			$users = [
						'name' => $name,
						'username' => $username,
						'email' => $email,
						'password' => $password,
						'category' => $category
					];

			$myfile = fopen("../model/users.json", 'r');
			$data = fread($myfile, filesize("../model/users.json"));
			$json = json_decode($data, true);
			array_push($json, $users);

			$myfile = fopen("../model/users.json", 'w');
			$write = json_encode($json, JSON_PRETTY_PRINT );

			if(fwrite($myfile, $write))
			{
				echo "user added successfully";
			}else{
				echo "failed";
			}
		}
	}
?>

<?php
	
	$title = "Add user";
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
	 			</ul>
	 		</td>
	 		<td>
	 			<form method="post" action="#">
	 			<fieldset>
	 				<legend>Add User</legend>

	 				<table>
	 				<tr>
					<td>Name </td>
					<td><input type="text" name="name" value=""  pattern="[A-Za-z0-9 ]{3,64}" title="must contain at least two (3) characters and alpha numeric characters and space are allow"  required=""></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="" pattern="[A-Za-z0-9._ ]{3,64}" title="must contain at least two (3) characters and alpha numeric characters, period, dash or underscore allow" required=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" required=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#,@,%,$,]).{8,}" title="must not be less than eight (8) characters and must contain at least one of the special characters (@, #, $, %)" required=""></td>
				</tr>
				<tr>
					<td>Re-type password</td>
					<td><input type="password" name="repass" required=""></td>
				</tr>

	 			</table>
	 			<br>
	 			<table>
				<tr>
					
					Category:
					<!-- <input type="radio" name="category" value="admin">Admin -->
					<input type="radio" name="category" value="farmer" required="">Farmer
					<input type="radio" name="category" value="buyer">Buyer
					<input type="radio" name="category" value="worker">Worker
				
				</tr>
			</table>
				<hr>
			<table>
				<tr>
					<td><input type="submit" name="submit" value="Add User"></td>
				</tr>
			</table>
	 		</fieldset>
	 		<form>		
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
