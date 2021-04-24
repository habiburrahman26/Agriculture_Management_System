
<?php 
	require_once('../model/userModel.php');
	$id = $_COOKIE['id'];
	$row = getUserByID($id);
?>

<div class="header">
		<div class="profile">

		<?php echo "<img src='../assets/profile/".$row['image']."'"; ?>  style="border-radius: 50%;" width="50px" height="50px" alt="logo" onclick ="show()">

		</div>
	</div>

	<div class ="profile-container" id="menu">
		<ul>
			<li style="font-weight: bold;color: black"><?php  echo $_COOKIE['username'];?></li>
			<li><a href="viewProfile.php" style="color: black">My Profile</a></li>
			<li><a href="../controller/logout.php" style="color: black"><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px; padding-right: 5px"></i>Log Out</a> </li>
		</ul>
	</div>
	