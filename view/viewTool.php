<?php

	$title = 'View Tools';
	include_once('header.php');

?>
<body>
	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		});	
		
	</script>

	<?php
	session_start();
		if (isset($_SESSION['message'])) {?>
			<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -40px; background-color: #db7556;color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%" >
				<?php   echo $_SESSION['message'];
				 unset($_SESSION['message']);?>
			</div>			
	<?php		
		}
	?>

	<?php  include_once('midel.php'); ?>

	<div id="search">
		<input id="src-input" type="text" name="search" placeholder="Search" onkeyup="toolsSearch()">
		<button id="src-btn" >Search</button>
	</div>

	<div id="search-result"></div>

	<div class="side-bar ">
		<?php include('link.php'); ?>
	</div>
	
	<div class="tables">
		<table>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Image</th>
				<th>Action</th>
			</tr>

			<?php

				require_once('../model/toolsModel.php');
				
				$row = getAllTools();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['price']; ?></td>
					<td><?php echo $value['description']; ?></td>
					<td><?php echo "<img src='../assets/tools/".$value['img']."' width='100px'";  ?></td>
					
					<td>
						<button id="edit-button"><a href="editTools.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button"><a href="../controller/deleteTool.php?id=<?php echo $value['id']; ?>">Delete</a></button>
					</td>

				<?php echo "</tr>"; } ?>
		</table>
	</div>


</body>
</html>