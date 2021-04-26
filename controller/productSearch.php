<?php

$name = $_REQUEST['search'];
$conn = mysqli_connect( 'localhost', 'root', '', 'test' );
$sql = "select * from products where name like '%{$name}%'";
$result = mysqli_query( $conn, $sql );

$response = "<table border = 1>
					<tr>
						<td>Name</td>
                        <td>Price</td>
                        <td>Quantity<td>
					</tr>";

while ( $row = mysqli_fetch_assoc( $result ) ) {
    $response .= "	<tr>
						<td>{$row['name']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['quantity']}</td>
					</tr>";
}

$response .= "</table>";

echo $response;

?>