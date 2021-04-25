<?php

    session_start();
    require_once("../model/contact.php");
    $id = $_REQUEST['id'];

    $result = updateStatus($id);

    if($result){
        $_SESSION['message'] = 'Issue Fixed!!';
        header('location:../view/report.php');
    }else{
        $_SESSION['message'] = 'Issue Not fixed';
    }





?>