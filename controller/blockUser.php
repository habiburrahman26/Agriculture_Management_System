<?php

session_start();
$id = $_REQUEST['id'];

require_once '../model/userModel.php';
$status = blockUser( $id );
if ( $status ) {
    $_SESSION['message'] = "User Blocked Successfully";
    header( "location:../view/userList.php" );
} else {
    echo "user not blocked";
}

?>