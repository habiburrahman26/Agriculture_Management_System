<?php
	$title = "PROFILE PICTURE Page";
	include('header.php');
?>
<table border="1"  width="100%">
 	<tr height="100px">
		<td colspan="3" align="right">
			Logged in as <a href="ViewP.php"> <?php echo $_SESSION['username']?> |</a><a href="../controller/logout.php"> Logout</a>
		</td>
	</tr>
	<tr colspan="3" height="450px">
		<td width="200px">
	<div id="nav_bar">
				<b>My Account</b> 
				<br>
				<br>
				<hr>
		<li><a href="home.php"> Home </a>	</li>
		<li><a href="viewP.php">View Profile</a></li> 
		<li><a href="editP.php">Edit Profile</a></li> 
		<li><a href="changePass.php">Change Password</a></li>
		<li><a href="propic.php">Change Profile Picture</a></li>
		<li><a href="list.php"> Worker List </a>	</li> 
		<li><a href="work.php"> New Work </a>	</li>
		<li><a href="workList.php"> New Work List </a>	</li>
		<li><a href="createNew.php"> Create New Worker </a>	</li> 
		<li><a href="viewJob.php">View Your Jobs</a></li>	
		<li><a href="schedule.php">Work Schedule</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="notification.php"> Notification </a>	</li> 
		<li><a href="../controller/logout.php">Logout</a></li> <br>
	</div>
	</td>
	<td colspan="3">
	<div id="page_title">
	
	<form method="post" action="propicCheck.php" enctype="multipart/form-data"> 
		<fieldset style="width:90%;">	
			
		<legend><b>PROFILE PICTURE</b></legend>
			
		<img src="../assets/avatar2.png" width="270" height="300">
		<br>
		<br>
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="upload">
			
			<hr>
			<input type="submit" name="submit" value="Submit"><br>
			<br>
		</fieldset>
	</form>		
	</div>
	</td>

	</tr>
	
	
</table>
<?php include('footer.php') ?>

