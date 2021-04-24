

<!DOCTYPE html>
<html>
<head>

<title>Document</title>
</head>
<body>
	 
		
		<input type="text" placeholder="search">
		<br>
		<br>
		
	


	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			
 			<td align="right">
 				Logged in as
 				
 				<a href="logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="300px">
	 		<td>
	 			My Account
	 			<ul>
	 				<li><a href="dashboard.php">Dashboard</a></li>
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 				<li><a href="editProfile.php">Edit Profile</a></li>
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.html">Change Password</a></li>
					
					
					<li><a href="showbuyproductinfo.php">Show Buy Product Info</a></li>
				    <li><a href="reviewProduct.html">Review Product</a></li>
					<li><a href="buyProduct.php">Buy Product</a></li>
					
					
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<form method="post" action="cngPassCheck.php">
				<fieldset>
				<legend><b>Buy Product Info</b></legend>
				<table border="1" align="center" width="100%">
					
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price(tk)</th>
				<th>Quantity</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Garlic</td>
				<td>Garlic is an herb that is grown around the world. It is related to onion, leeks, and chives. It is thought that garlic is native to Siberia, but spread to other parts of the world over 5000 years ago. Garlic is most commonly used for conditions related to the heart and blood system.</td>
				<td>300</td>
				<td>5(kg)</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Cucumber</td>
				<td>Cucumber is a widely-cultivated creeping vine plant in the Cucurbitaceae gourd family that bears cucumiform fruits, which are used as vegetables. There are three main varieties of cucumber slicing, pickling, and burpless/seedless within which several cultivars have been created.</td>
				<td>250</td>
				<td>4(kg)</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Banana</td>
				<td>A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called "plantains", distinguishing them from dessert bananas.</td>
				<td>115</td>
				<td>8(dozon)</td>
			</tr>
					
			    </table>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
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