<?php

session_start();
require_once '../model/toolsModel.php';

$id = $_REQUEST['id'];

$result = deleteTools( $id );

if ( $result ) {
    $_SESSION['message'] = 'Tools deleted successfully!';
    header( 'location:../view/viewTool.php' );
} else {
    echo "Tool not deleted";
}

?>