<?php
	
	$title = "Add Tools";
	include('header.php');
?>
	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as <?php echo $_COOKIE['username']?> | 
 				<a href="../controller/logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="400px">
	 		<td width="300px">
	 			<ul>
	 				<?php  include('link.php'); ?>
	 			</ul>
	 		</td>
	 	
	 		<td>
	 			<form method="post" action="../controller/toolCheck.php" enctype="multipart/form-data">
	 				<fieldset>
	 					<legend>ADD TOOLS</legend>
	 					<table>
	 						<tr>
	 							<td width="100px"> Picture</td>
	 							<td><input type="file" name="tool_img" ></td>
	 						</tr>
	 						<tr>
	 							<td>Tools Name</td>
	 							<td><input type="text" name="name" value="" required=""></td>
	 						</tr>
	 						<tr>
	 							<td>Price</td>
	 							<td><input type="text" name="price" value="" required=""></td>
	 						</tr>
	 						<tr>
	 							<td>Describe</td>
	 							<td>
	 								<textarea name="desc" required=""></textarea>
	 							</td>
	 						</tr>
	 					</table>
	 					<hr>
	 					<input type="submit" name="submit" value="Add">
	 				</fieldset> 
	 			</form>

	 		</td>
	 	</tr>
	 </table>
</body>
</html>