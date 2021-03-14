<?php
	
	$title = "News";
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
	 		<td align="left">
	 			<div id="card">
	 				<img src="../assets/1.jpg" alt="bd and india">
	 				<div id="container">
	 					<h3>Bangladesh, India look at forging<br> closer ties on farm front</h3>
	 					<p>Bangladesh and India will look at ways<br> to jointly enhance productivity in the <br>agriculture sector with forward and <br>backward integration in the field. The two <br>countries could also look at expanding</p>
	 					<a href="bd.php"><button>View Details</button></a>
	 				</div>
	 			</div>
	 			<br>
	 			<br>
	 			<div id="card">
	 				<img src="../assets/3.jpg" alt="fao" width="250px">
	 				<div id="container">
	 					<h3>Are the farmers a ‘means’ of <br>
	 					increasing production only?</h3>
	 					<p>No one is concerned about the interests<br> and the health of the farmers. Farmers are <br>only regarded as the means of increasing <br>production.It seems their breath and <br>lives are not something to consider</p>
	 					<a href="fao.php"><button>View Details</button></a>
	 				</div>
	 			</div>
	 			<br>
	 			
	 		</td>  
 		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>
