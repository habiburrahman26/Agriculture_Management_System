<?php

session_start();
require_once "../model/contact.php";
$id = $_REQUEST['id'];

if ( isset( $_POST['submit'] ) ) {
    
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $quantity =$_POST['quantity'];

    $result = updateProduct($id,$name,$desc,$price,$quantity);

    if($result){
        $_SESSION['message'] = "Product update successfully";
        header('location:../view/editProduct.php?id='.$id);
    }else{
        $_SESSION['message'] = "Product not update";
        header('location:../view/editProduct.php?id='.$id);
    }
}

?>