<?php

	$title = 'Edit Category';
	include_once('header.php');
?>
<body>
	
	
	<?php
		session_start();
			if (isset($_SESSION['message'])) {?>
				<div class="message">
					<?php   echo $_SESSION['message'];
					unset($_SESSION['message']);?>
				</div>			
		<?php		
			}
		?>

	<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include_once('link.php'); ?>
		</div>

		<div id="msg" style="display: none;"></div>
		<div class="row-right-product">
			<h1 id="product">Edit Product Category</h1>
			<form method="POST" action="../controller/editCategory.php?id=<?php $id = $_REQUEST['id']; echo $id;?>" onsubmit = "return editCategoryValidation()">
				<label>Category Name</label><br>
				<input id="name" type="text" name="category" value="<?php  require_once('../model/categoryModel.php');
				$result = getCategoryById($id); echo $result['categoryName']; ?>"><br>
				<label id="lproduct" style="color: red;font-size: .8rem;"></label><br>
				<input id="add_button" type="submit" name="submit" value="save">

			</form>
		</div>

		<script type="text/javascript">

		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target != menu) {
				menu.style.display = 'none';
			}
		});

	</script>

</body>
</html>