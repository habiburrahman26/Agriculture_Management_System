<?php
	$title = "Create New Worker page";
	include('header.php');
	//require_once('../model/userModel.php');
	//$workers = getAllUser();
?>

<script type="text/javascript">
		
		function s(){
		
				var username = document.forms["myform"]["username"].value;
			
				if(username ==""){
					alert("Username required");
					return false;
				}
				
				var name = document.forms["myform"]["name"].value;
				
				if(name ==""){
					alert("Name required");
					return false;
				}
				
				var email = document.forms["myform"]["email"].value;
				
				if(email ==""){
					alert("Email required");
					return false;
				}
				
				var password = document.forms["myform"]["password"].value;
				
				if(password ==""){
					alert("Password required");
					return false;
				}
				
				var repass = document.forms["myform"]["repass"].value;
				
				if(repass ==""){
					alert("Re-type password required");
					return false;
				}
		}
		
	</script>


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

	<form name="myform" onsubmit="return s()" method="post" action="../controller/createCheck.php">

		<fieldset style="width:90%;">
			<legend><b>Add Worker </b></legend>
			
			<br>
		<div id="main_content">
			
				<fieldset>
					<legend>Create New</legend>
					<table>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td>Re-type password</td>
							<td><input type="password" name="repass"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="Create">
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
<?php include('footer.php') ?>


