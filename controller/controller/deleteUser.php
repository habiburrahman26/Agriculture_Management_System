<?php

session_start();
require_once '../model/userModel.php';
$id = $_REQUEST['id'];

$result = deleteUser( $id );

if ( $result ) {
    $_SESSION['message'] = 'Record deleted successfully!';
    header( "location:../view/userList.php" );
} else {
    echo "user not delete";
}

?>