<?php
	
	$id = $_REQUEST['id'];
	require_once('../model/userModel.php');
	$row = getUserByID($id);
	$img = $row['image'];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assets/002-planting.png"><title>Change Profile Picture</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet"  href="../assets/icon/flaticon.css">
   <script type="text/javascript" src="script.js"></script>
</head>
<body style="background-color: white">
	
		<div class="side-bar ">
			<ul>
				<li><a href="Dashbord.html"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a></li>
				<li><a href="addUser.html"><i class="fa fa-user" aria-hidden="true"></i><span>Add Users</span></a></li>
				<li><a href="userList.html"><i class="fa fa-users" aria-hidden="true"></i><span> View user list</span></a></li>
				<li><a href="addProductCategory.php"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Add Product Category</span>
				</a></li>
				<li><a href="productCategoryList.php"><i class="flaticon-categories"></i><span>Product category list</span> </a></li>
				<li><a href="addTools.html"><i class="flaticon-settings"></i><span>Add tools</span></a></li>
				<li><a href="viewTools.php"><i class="flaticon-steps"></i><span>View tools</span></a></li>
			</ul>
		</div>

		<div class="editProfile">
			<?php echo "<img src='../assets/profile/".$row['image']."'width='150px' heoght='150px'";?><br>
			
		<div id="edit-containt">
			<form method="POST" action="../controller/changeProfilePicture.php" enctype="multipart/form-data">
				<input type="file" name="profile_img" required=""><br>
				<div style="padding: 60px 0px;">
					<button style="margin-right: 40px"><a href="viewProfile.php">Cancel</a></button>
					<input id="button" type="submit" name="submit" value="Save">
				</div>		
			</form>	
		</div>
		
		
</body>
</html>