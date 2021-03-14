<?php
	
	$title = "View Tools";
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
	 			<h2>Tools List</h2>
	 			<table border="1">
	 				<tr>
	 					<td width="40px">ID</td>
	 					<td>Name</td>
	 					<td width="70px">Price</td>
	 					<td>Picture</td>
	 					<td>Action</td>
	 				</tr>
	 				
	 				<tr>
	 					<td>1</td>
	 					<td>Water Pump</td>
	 					<td>6000</td>
	 					<td><img src="../assets/pump.jfif" alt="pump" width="150px" height="100px"></td>
	 					<td>
	 						<a href="editTool.php?id=1">EDIT</a> |
	 						<a href="deleteTools.php?id=1">DELETE</a>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>2</td>
	 					<td>Tractor</td>
	 					<td>150000</td>	
	 					<td><img src="../assets/tractor.jfif" alt="tractor" width="200px" height="100px"></td>
	 					<td>
	 						<a href="editTool.php?id=2">EDIT</a> |
	 						<a href="deleteTools.php?id=2">DELETE</a>
	 					</td>
	 				</tr>			

	 			</table>
	 			
	 		</td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>