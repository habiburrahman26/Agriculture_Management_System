<?php

session_start();
require_once '../model/categoryModel.php';

$categoryName = $_POST['category'];
$id = $_REQUEST['id'];

if ( $categoryName == '' ) {
    echo "Please enter category name";
} elseif ( strlen( $categoryName ) < 4 ) {
    echo "category name is  too short";
} else {

    $flagName = false;

    for ( $i = 0; $i < strlen( $categoryName ); $i++ ) {
        if (  ( $categoryName[$i] >= 'A' && $categoryName[$i] <= 'Z' ) || ( $categoryName[$i] >= 'a' && $categoryName[$i] <= 'z' )
            || ( $categoryName[$i] == " " ) ) {
            $flagName = true;
        } else {
            echo "category name conatin alphabets and white space" . '<br>';
            $flagName = false;
            break;
        }
    }
    if ( $flagName == true ) {

        $status = updateCategory( $categoryName, $id );
        if ( $status ) {
            $_SESSION['message'] = "Category updated Successfully";
            header( "location:../view/editCategory.php?id=" . $id );
        } else {
            echo "Not edit";
        }
    }

}

?>