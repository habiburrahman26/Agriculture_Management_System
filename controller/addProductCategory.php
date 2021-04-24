<?php

require_once '../model/categoryModel.php';

$categoryName = $_POST['name'];

if ( $categoryName == "" ) {
    echo "please enter a name";
} else if ( strlen( $categoryName ) < 4 ) {
    echo "category name is too short";
} else {

    $flagName = false;

    for ( $i = 0; $i < strlen( $categoryName ); $i++ ) {
        if (  ( $categoryName[$i] >= 'A' && $categoryName[$i] <= 'Z' ) || ( $categoryName[$i] >= 'a' && $categoryName[$i] <= 'z' )
            || ( $categoryName[$i] == " " ) ) {
            $flagName = true;
        } else {
            echo "name conatin alphabets and white space" . '<br>';
            $flagName = false;
            break;
        }
    }
    if ( $flagName == true ) {

        $status = insertCategory( $categoryName );

        if ( $status ) {
            echo "Category added successfully";
        } else {
            echo "category not added";
        }
    }

}

?>