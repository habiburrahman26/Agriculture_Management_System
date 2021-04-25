<?php

$name = $_REQUEST['name'];
$conn = mysqli_connect( 'localhost', 'root', '', 'test' );
$sql = "select * from category where categoryName like '%{$name}%'";
$result = mysqli_query( $conn, $sql );

$response = "<table border = 1>
					<tr>
						<td>Name</td>
					</tr>";

while ( $row = mysqli_fetch_assoc( $result ) ) {
    $response .= "	<tr>
							<td>{$row['categoryName']}</td>
						</tr>";
}

$response .= "</table>";

echo $response;

?>