<?php
	
	if(isset($_POST['submit']))
	{
		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$retypePass = $_POST['retypePass'];

		if ($currentPass != $_COOKIE['password']) 
		{
			echo "current password doesn't match";
		}
		elseif($newPass != $retypePass)
		{
			echo "new password and re-type password doesn't match";
		}
		else
		{
			$myfile = fopen("../model/users.json", 'r');
			$data = fread($myfile, filesize("../model/users.json"));
			$json = json_decode($data, true);

			foreach ($json as $key => $value){

				$username = $value['username'];
				$password = $value['password'];

				if($username == $_COOKIE['username'] && $password == $_COOKIE['password'])
				{
					
					$json[$key]['password'] = $newPass;
					

					$myfile = fopen("../model/users.json", 'w');
					$write = json_encode($json, JSON_PRETTY_PRINT );

					if(fwrite($myfile, $write))
					{
						echo "success";
					}
				}
	 		}
		}
	}
?>

<?php
	
	$title = "Change Password";
	include('header.php');
?>

	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as <?php echo $_COOKIE['username']; ?> |
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
	 			<form method="post" action="#">
				<fieldset>
				<legend>CHANGE PASSWORD</legend>
				<table>
					<tr>
						<td>Current Password:</td>
						<td><input type="Password" name="currentPass" value="" required=""></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="Password" name="newPass" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#,@,%,$,]).{8,}" title="must not be less than eight (8) characters and must contain at least one of the special characters (@, #, $, %)" required=""></td>
					</tr>
					<tr>
						<td>Retype New Password:</td>
						<td><input type="Password" name="retypePass" value="" required=""></td>
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