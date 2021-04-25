<?php

	$title = 'Users List';
	include_once('header.php');

?>
<body>
	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		})
	</script>

	<?php
	session_start();
		if (isset($_SESSION['message'])) {?>
			<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -40px; background-color: #db7556; color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%" >
				<?php   echo $_SESSION['message'];
				 unset($_SESSION['message']);?>
			</div>			
	<?php		
		}
	?>
	
	<?php  include_once('midel.php'); ?>

	<div id="search">
		<input id="src-input" type="text" name="search" placeholder="Search" onkeyup="searchUser()">
		<button id="src-btn" >Search</button>
	</div>

		<div id="search-result"></div>

		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div class="user-table">
			<table>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				<?php

				//require_once('../model/userModel.php');
				
				$row = getAllUser();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['username']; ?></td>
					<td><?php echo $value['email']; ?></td>
					
					<td>
						<button id="edit-button"><a href="editUser.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button"><a href="../controller/blockUser.php?id=<?php echo $value['id']; ?>">Block</a></button>
						<button  id="delete-button"><a href="../controller/deleteUser.php?id=<?php echo $value['id']; ?>">Delete</a></button>
					</td>

				<?php echo "</tr>"; } ?>
			</table>
		</div>

</body>
</html>