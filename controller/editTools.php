<?php

session_start();
if ( isset( $_POST['submit'] ) ) {
    $toolsName = $_POST['toolsName'];
    $price = $_POST['price'];
    $description = $_POST['desc'];

    require_once '../model/toolsModel.php';
    $id = $_REQUEST['id'];
    $status = updateTools( $toolsName, $price, $description, $id );

    if ( $status ) {
        $_SESSION['message'] = "Tools updated Successfully";
        header( "location:../view/editTools.php?id=" . $id );
    } else {
        echo "Tools not Update";
    }
}

?>
