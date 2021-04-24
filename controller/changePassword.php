<?php

session_start();
if ( isset( $_POST['submit'] ) ) {
    $current = $_POST['currentPass'];
    $new = $_POST['newPassword'];
    $retype = $_POST['retypePassword'];

    $currentPassword = $_SESSION['password'];

    if ( $current == '' || $new == "" || $retype == "" ) {
        echo "please fillup all required form";
    } else if ( strlen( $new ) < 6 ) {
        echo "password can't be less than 6 character";
    } elseif ( $currentPassword == $new ) {
        echo "current and new password can't be same";
    } elseif ( $new != $retype ) {
        echo "password doesn't match";
    } else if ( $current != $currentPassword ) {
        echo "current password doesn't match";
    } else {

        $special = false;
        $upper = false;
        $lower = false;
        $number = false;

        for ( $i = 0; $i < strlen( $new ); $i++ ) {
            if ( $new[$i] === '$' || $new[$i] === '@' || $new[$i] === '#' || $new[$i] === '&' ) {
                $special = true;
            } elseif ( $new[$i] >= 'A' && $new[$i] <= 'Z' ) {
                $upper = true;
            } elseif ( $new[$i] >= 'a' && $new[$i] <= 'z' ) {
                $lower = true;
            } elseif ( $new[$i] >= 0 && $new[$i] <= 9 ) {
                $number = true;
            }
        }

        if ( $special == false ) {
            echo "password contain at least one special character($, #, $, &)";
        } elseif ( $upper == false ) {
            echo "password contain at least one upper case";
        } elseif ( $lower == false ) {
            echo "password contain at least one lower case";
        } elseif ( $number == false ) {
            echo "password contain at least one numeber";
        }

        if ( $special == true && $upper == true && $lower == true && $number == true ) {
            $id = $_COOKIE['id'];
            require_once '../model/db.php';
            $conn = getConnection();
            $sql = "update users set password = '{$new}' where id = '{$id}'";

            if ( mysqli_query( $conn, $sql ) ) {
                $_SESSION['password'] = $new;
                $_SESSION['message'] = "Password change successfully";
                header( 'location:../view/changePassword.php' );
            } else {
                echo "password not change";
            }
        }

    }

}

?>