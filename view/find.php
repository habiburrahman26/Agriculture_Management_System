<?php

	$name = $_REQUEST['username'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from workers where username like '%{$username}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Username</td>
						<td>Email</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>




