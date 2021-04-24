<?php
	$title = "Edit Profile Page";
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
		
		<fieldset style="width:90%;">
			<legend><b>Notification</b></legend>
			<table border="1">
				<tr>
					<td><b>Task </b></td> 
					<td><b>Request from</b></td>
					<td><b>Date</b></td>
					<td><b>Details</b></td>
				</tr>
				
				<tr>
					<td>Machine Cutting Of Crops</td>
					<td>Farmer 1</td>
					<td>04/02/2021</td>
					<td><a href="viewJob.php">View</td>
				</tr>
				<tr>
					<td>Machine task</td>
					<td>Farmer 2</td>
					<td>16/03/2021</td>
					<td><a href="viewJob.php">View</td>
				</tr>
			
				
				
			</table>

			<br>
		</fieldset>

	</div>
	</td>

	</tr>
	
</table>
<?php include('footer.php') ?>