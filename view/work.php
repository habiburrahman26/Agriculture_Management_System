<?php
session_start();
	$title = "New Work page";
	include('header.php');
	//require_once('../model/workModel.php');
	//$workers = getAllUser();
?>
<head>
	<script type="text/javascript">
		
		function f(){
		
				var username = document.forms["myform"]["username"].value;
			
				if(username ==""){
					alert("Username required");
					return false;
				}
				
				var task = document.forms["myform"]["task"].value;
				
				if(task ==""){
					alert("Task required");
					return false;
				}
				
				var email = document.forms["myform"]["email"].value;
				
				if(email ==""){
					alert("Email required");
					return false;
				}
				
				var period = document.forms["myform"]["period"].value;
				
				if(period ==""){
					alert("Date required");
					return false;
				}
				
				var location = document.forms["myform"]["location"].value;
				
				if(location ==""){
					alert("Location required");
					return false;
				}
				
				var salery = document.forms["myform"]["salery"].value;
				
				if(salery ==""){
					alert("Salery required");
					return false;
				}
				
		}
		
	</script>
</head>
<body>
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

	<form name="myform" onsubmit="return f()" method="post" action="../controller/workCheck.php">

		<fieldset style="width:90%;">
			<legend><b>Add Work(Worker Request Details) </b></legend>
			
			<br>
		<div id="main_content">
			
				<fieldset>
					<legend>Work Detail</legend>
					<table>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username"></td>
						</tr>
						
						<tr>
							<td>Task Allot</td>
							<td><input type="text" name="task"></td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>Period</td>
							<td><input type="date" name="period"></td>
						</tr>
						<tr>
							<td>Location</td>
							<td><input type="text" name="location"></td>
						</tr>
						<tr>
							<td>Incentive</td>
							<td><input type="text" name="salery"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="Add">
							</td>
						</tr>
					</table>
				</fieldset>
			
		</div>
			<br><br>
			
		</fieldset>
	</form>		
	</div>
	</td>

	</tr>

</table>
</body>
<?php include('footer.php') ?>
