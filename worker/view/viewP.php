<?php
	$title = "Profile page";
	include('header.php');
	require_once('../model/userModel.php'); 
	
	//echo $_GET['id'];
	//$id = $_GET['id'];
	
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
		<li><a href="workList.php"> New Work List</a>	</li>
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
	
		<fieldset style="width:90%;">
			<legend><b>PROFILE</b></legend>
			<table>
				<tr>
					<tr>
						<td>Userame:</td>
						<td> <?php echo $_SESSION['username']; ?> </td>
					</tr>
					<tr>
						<td>Name:</td>
						<td>Rafiul Shan</td>
					</tr>
						
					<tr> 
						<td>Email :</td>
						<td>rafiulshan8034@gmail.com</td>
					</tr>
						
					<tr> 
						<td> Date of Birth :</td>
						<td>2/04/2021</td>						
					</tr>
					
					<tr> 
						<td>Biodata :</td>
						<td>I am worker</td>
					</tr>
						
					<tr>
						<td>Contact Number :</td>
						<td>+8801989344267</td>
					</tr>
					
					<td>
						<img src="../assets/avatar2.png" width="100px" height="80px"><br>
						<a href="propic.php">Change Profile Picture </a>
					</td>
				</tr>
				
			</table>
			<a href="editP.php"> Edit Profile </a>
		</fieldset>
	
	</div>
	</td>

	</tr>

	
</table>
<?php include('footer.php') ?>
