<?php
	$title = "Search page";
	include('header.php');
	
?>
<head>
	<script type="text/javascript" >
		"use strict"
		
		function ajax(){

		const name = document.getElementById('username').value;
	
		const xhttp = new XMLHttpRequest();

		xhttp.open('POST', 'find.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('username='+username);

		xhttp.onreadystatechange = function(){
			
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
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
		<li><a href="wsearch.php">Search Worker List </a>	</li> 
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
			<legend><b>Search Worker </b></legend>
			
			<br>
		<div id="main_content">
			
			<h4 id="myh1">Username</h4>
			<input type="text" name="" id="username" />
				<input type="button" name="" value="search" onclick="ajax()">
					
					<div id="result"></div>
				
			
		</div>
			<br><br>
			
		</fieldset>
			
	</div>
	</td>

	</tr>
	
</table>
</body>
<?php include('footer.php') ?>


