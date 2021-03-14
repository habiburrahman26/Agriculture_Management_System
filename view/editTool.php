<?php
	
	$title = "Edit Tools";
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
	 				<?php include('link.php') ?>
	 			</ul>
	 		</td>
	 	
	 		<td>
	 			<form method="post" action="#">
	 				<fieldset>
	 					<legend>Edit TOOLS</legend>
	 					<table>
	 						
	 						<tr>
	 							<td>Tools Name</td>
	 							<td><input type="text" name="name" value="<?php $id = $_GET['id']; if($id == '1'){echo "Water Pump";}else{echo "Tractor";} ?>" required=""></td>
	 						</tr>
	 						<tr>
	 							<td>Price</td>
	 							<td><input type="text" name="price" value="<?php $id = $_GET['id']; if($id == '1'){echo "6000";}else{echo "150000";} ?>" required=""></td>
	 						
	 						<tr>
	 							<td></td>
	 							<td width="100px"><?php $id = $_GET['id']; if($id == 1)
	 							{echo '<img src="../assets/pump.jfif" alt="pump" width="150px" height="100px">';} 
	 							else{echo '<img src="../assets/tractor.jfif" alt="tractor" width="200px" height="100px">';}
	 							?></td>
	 							
	 						</tr>
	 						</tr>
	 							<tr>
	 								<td>Change Picture</td>
	 							<td><input type="file" name="myfile" ></td>
	 						</tr>
	 						
	 					</table>
	 					<hr>
	 					<input type="submit" name="submit" value="Edit">
	 				</fieldset> 
	 			</form>

	 		</td>
	 	</tr>
	 </table>
</body>
</html>