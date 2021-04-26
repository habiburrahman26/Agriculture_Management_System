<?php

    session_start();
    require_once("../model/contact.php");

    $id = $_REQUEST['id'];

    $result = deleteProduct($id);
    
    if($result){
        $_SESSION['message']='product deleted successfully!!';
        header('location:../view/farmerProductReport.php');
    }else{
        $_SESSION['message'] = 'product not delete';
        header('location:../view/farmerProductReport.php');
    }

?>