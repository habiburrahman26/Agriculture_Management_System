<?php

session_start();
if ( isset( $_POST['submit'] ) ) {
    $toolsName = $_POST['toolsName'];
    $price = $_POST['price'];
    $description = $_POST['desc'];
    $file_info = $_FILES['tool_img'];

    if ( $toolsName == '' ) {
        echo "Tools name can't be empty";
    } else if ( strlen( $toolsName ) < 4 ) {
        echo "tools name contain at leat 3 character";
    } else if ( $price == '' ) {
        echo "price can't be ampty";
    } else if ( $description == "" ) {
        echo "Decription can't be empty";
    } else {
        $flagToolsName = false;

        for ( $i = 0; $i < strlen( $toolsName ); $i++ ) {
            if (  ( $toolsName[$i] >= 'A' && $toolsName[$i] <= 'Z' ) || ( $toolsName[$i] >= 'a' && $toolsName[$i] <= 'z' )
                || $toolsName[$i] == " " ) {
                $flagToolsName = true;
            } else {
                echo "Tools name conatin alphabets and white space" . '<br>';
                $flagToolsName = false;
                break;
            }
        }

        $flagPrice = false;

        for ( $i = 0; $i < strlen( $price ); $i++ ) {
            if ( $price[$i] >= '0' && $price[$i] <= '9' ) {
                $flagPrice = true;
            } else {
                echo "please enter number in price";
                $flagPrice = false;
                break;
            }
        }

        if ( $flagToolsName == true && $flagPrice == true ) {

            $ext = explode( '.', $file_info['name'] );
            $path = '../assets/tools/' . time() . '.' . $ext[1];
            $fileName = time() . '.' . $ext[1];

            if ( $ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpeg' ) {

                if ( $file_info['size'] < 4000000 ) {
                    if ( move_uploaded_file( $file_info['tmp_name'], $path ) ) {
                        require_once '../model/toolsModel.php';
                        $status = insertTools( $toolsName, $price, $description, $fileName );

                        if ( $status ) {
                            $_SESSION['message'] = "Tools added Successfully";
                            header( 'location:../view/addTools.php' );
                        } else {
                            echo "Tools not add";
                        }

                    } else {
                        echo "error";
                    }
                } else {
                    echo "you file size can't be greater than 4MB";
                }

            } else {
                echo "png, jpg and jpeg file are allow";
            }
        }
    }

}

?>