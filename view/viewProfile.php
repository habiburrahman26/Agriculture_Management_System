<?php

	$title = 'View Profile';
	include_once('header.php');
	$id = $_COOKIE['id'];
?>
<body style="background-color: white">
	
		<<div class="side-bar">
			 <?php include('link.php'); ?> 
		</div>

		<div class="viewProfile">
			<?php require_once('../model/userModel.php');
				$row = getUserByID($id);
			?>
			<?php echo "<img src='../assets/profile/".$row['image']."' width='200px'";  ?><br><br>
			<div id="profile-content">
				<label style="font-weight: bold;"><?php echo $_COOKIE['name']; ?></label><br><br>
				<label><?php echo $_COOKIE['username']; ?></label>
			</div>
			<div style="display: inline-block;">
				<button id="profileEdit"><a href="editProfile.php">Edit profile</a></button>
			</div>
			<div style="display: inline-block;padding: 0px 40px;">
				<button id="changePassword"><a href="changePassword.php">Change Password</a></button>
			</div>
		</div>
		
		
</body>
</html>