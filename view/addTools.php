<?php

	$title = 'Add Tools';
	include_once('header.php');

?>
<body>
	
	<?php
		session_start();
			if (isset($_SESSION['message'])) {?>
				<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -40px; color: red; background-color: #81D89C;color: #ffffff; padding: 20px 30px; font-size: 1.2rem; width: 84%" >
					<?php   echo $_SESSION['message'];
					 unset($_SESSION['message']);?>
				</div>			
		<?php		
			}
		?>
	
	<?php  include_once('midel.php'); ?>

	
	<div class="side-bar ">
		<?php include('link.php'); ?>
	</div>

	<div class="row-right">
		<h1 id="user">Add Tool</h1>
		<form method="POST" id="toolFrom" action="../controller/addTools.php" enctype="multipart/form-data" onsubmit=" return toolValidation()">
			<label>Picture</label><br>
			<input type="file" name="tool_img" id="img" required=""><br>
				
			<input id="name" type="text" name="toolsName" placeholder="Name..."><br>
			<label id="itoolName" style="color: red;font-size: .8rem;"></label><br>

			<input id="price" name="price" placeholder="Price..."><br>
			<label id="lprice" style="color: red;font-size: .8rem;"></label><br>
			<textarea name="desc" id="desc" form="toolFrom" placeholder="Description..."></textarea>
			<label id="ldesc" style="color: red;font-size: .8rem;"></label>
			<input id="add_button" type="submit" name="submit" value="Add">
		</form>
	</div>
	
	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		});

		const name = document.getElementById('name');
		const price = document.getElementById('price');
		const desc = document.getElementById('desc');
		const lname = document.getElementById('itoolName');
		const lprice = document.getElementById('lprice');
		const ldesc = document.getElementById('ldesc');

		name.onfocus = function(){
			lname.innerText = "";
			name.style.border = 'none';
		}
		price.onfocus = function(){
			lprice.innerText = "";
			price.style.border = 'none';
		}

		desc.onfocus = function(){
			ldesc.innerText = "";
			desc.style.border = 'none';
		}

	</script>
</body>
</html>