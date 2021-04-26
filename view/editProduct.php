<?php

	$title = 'Edit tools';
	include_once 'header.php';
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
		if ( isset( $_SESSION['message'] ) ) {?>
						<div style="margin-left: 250px; margin-top: 70px;margin-bottom: -70px; background-color: #81D89C;color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%">
							<?php echo $_SESSION['message'];
			unset( $_SESSION['message'] ); ?>
						</div>
				<?php
		}
?>

	<?php include_once 'midel.php';?>


	<div class="side-bar ">
		<?php include 'link.php';?>
	</div>

    <?php
		$id = $_REQUEST['id'];
        require_once '../model/contact.php';
        $row = getProductById( $id );
    ?>

	<div class="row-right">
	<h1 id="user">Edit Framer Product</h1>
		<form method ="POST" id="toolFrom"  action="../controller/editProduct.php?id=<?php echo $id; ?>">
			<label><?php echo "<img src='../assets/picture/".$row['picture']."' width='150px' heoght='100px'";  ?></label><br><br>
			<label>Name</label>
			<input id="name" type="text" name="name" value="<?php echo $row['name'];?>">
			<label>Description</label>
			<textarea name="desc" id="desc" form="toolFrom"><?php echo $row['description']; ?></textarea>
			<label>Price</label>
			<input type="text" id = "price" name = "price" value="<?php echo $row['price']; ?>">
			<label>Quantity</label>
			<input type="text" id="name" name="quantity" value ="<?php echo $row['quantity'] ?>">
			<input id="add_button" type="submit" name="submit" value="Save">
		</form>
	</div>

</body>
</html>