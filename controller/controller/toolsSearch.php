<?php

$name = $_REQUEST['name'];
$conn = mysqli_connect( 'localhost', 'root', '', 'test' );
$sql = "select * from tools where name like '%{$name}%'";
$result = mysqli_query( $conn, $sql );

$response = "<table border=1>
					<tr>
						<td>name</td>
						<td>price</td>
						<td>desc</td>
					</tr>";

while ( $row = mysqli_fetch_assoc( $result ) ) {
    $response .= "	<tr>
							<td>{$row['name']}</td>
							<td>{$row['price']}</td>
							<td>{$row['description']}</td>
						</tr>";
}

$response .= "</table>";

echo $response;

?>