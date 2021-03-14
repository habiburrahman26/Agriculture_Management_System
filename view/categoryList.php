<?php
	
	$title = "Category List";
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
	 				<?php include('link.php'); ?>
	 			</ul>
	 		</td>
	 		<td>
	 			<h2>Product Category List</h2>
	 			<table border="1">
	 				<tr>
	 					<td>Category Name</td>
	 					<td>Action</td>
	 				</tr>
	 				<tr>
	 					<td>Petty</td>	
	 					<td>
	 						<a href="">EDIT</a> |
	 						<a href="">DELETE</a>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>Vegitable</td>
	 					<td>
	 						<a href="">EDIT</a> |
	 						<a href="">DELETE</a>
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