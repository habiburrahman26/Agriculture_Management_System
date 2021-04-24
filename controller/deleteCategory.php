<?php

session_start();
require_once '../model/categoryModel.php';

$id = $_REQUEST['id'];

$result = deleteCategory( $id );

if ( $result ) {
    $_SESSION['message'] = 'Record deleted successfully!';
    header( 'location:../view/productCategoryList.php' );
} else {
    echo "Category not delete";
}

?>