<?php

	$title = 'Product Category List';
	include_once('header.php');

?>
<body>
	<?php
	session_start();
		if (isset($_SESSION['message'])) {?>
			<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -40px; color: red; background-color: #db7556;color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%" >
				<?php   echo $_SESSION['message'];
				 unset($_SESSION['message']);?>
			</div>
			

	<?php		
		}

	?>

	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		})
	</script>
	
	<?php  include_once('midel.php'); ?>

	<div id="search">
		<input id="src-input" type="text" name="search" placeholder="Search" onkeyup="productSearch()">
		<button id="src-btn" >Search</button>
	</div>

	<div id="search-result"></div>

	<div class="side-bar ">
		<?php include('link.php'); ?>
	</div>


		
		<div class = "side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div id="product-table">
			<table>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>

				<?php

				require_once('../model/categoryModel.php');
				
				$row = getAllCategory();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['categoryName'];  ?></td>
					<td>
						<button id="edit-button"><a href="editCategory.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button"><a href="../controller/deleteCategory.php?id=<?php echo $value['id']; ?>">Delete</a></button>
					</td>

				<?php echo "</tr>"; } ?>
			</table>
		</div>

</body>
</html>