<?php

    $title = 'Edit tools';
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
				<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -70px; background-color: #81D89C;color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%">
					<?php   echo $_SESSION['message'];
                     unset($_SESSION['message']);?>
				</div>			
		<?php
            }
        ?>

	<?php  include_once('midel.php');?>

	
	<div class="side-bar ">
		<?php include('link.php'); ?>
	</div>

	<div class="row-right">
		<h1 id="user">Edit Tools</h1>
		<form method="POST" id="toolFrom" action="../controller/editTools.php?id=<?php $id = $_REQUEST['id']; echo $id; ?>" enctype="multipart/form-data" onsubmit = "return toolValidation()">
			<?php
                require_once('../model/toolsModel.php');
                $row = getToolById($id);
                $desc = $row['description'];
             ?>
			 <br>
			<label><?php echo "<img src='../assets/tools/".$row['img']."' width='150px' heoght='100px'";  ?></label><br><br>
			<label>Change Picture</label><br>
			<!-- <input type="file" name="tool_img" id="img"><br> -->
				
			<input id="name" type="text" name="toolsName" placeholder="Name..." value="<?php echo $row['name']; ?>"><br>
			<label id="itoolName" style="color: red;font-size: .8rem;"></label><br>

			<input id="price" name="price" placeholder="Price..." value="<?php echo $row['price']; ?>"><br>
			<label id="lprice" style="color: red;font-size: .8rem;"></label><br>
			<textarea name="desc" id="desc" form="toolFrom" placeholder="Description..."><?php echo $row['description']; ?></textarea>
			<label id="ldesc" style="color: red;font-size: .8rem;"></label>
			<input id="add_button" type="submit" name="submit" value="Save">
		</form>
	</div>

</body>
</html>