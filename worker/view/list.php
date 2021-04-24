<?php
	$title = "Worker Edit List page";
	include('header.php');
	require_once('../model/userModel.php');
	$workers = getAllUser();
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
	<form method="post" action=""> 

		<fieldset style="width:90%;">
			<legend><b>Worker List Page</b></legend>
			
			<br>
			<table border="1">
			<thead>
			
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>ACTION</th>
			
			</thead>
			<tbody>	
			<?php foreach ($workers as $value) { echo "<tr>"; ?>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['username']; ?></td>
					<td><?php echo $value['email']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $value['id']; ?>">EDIT</a> |
					<a href="../controller/deleteCheck.php?id=<?php echo $value['id']; ?>">DELETE</a>
				</td>
			
			<?php } ?>
			</tbody>
			</table>
			<br><br>
			
		</fieldset>
	</form>		
	</div>
	</td>

	</tr>
	
</table>
<?php include('footer.php') ?>

