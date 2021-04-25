<?php

session_start();
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$active = $_REQUEST['active'];
$id = $_REQUEST['id'];

if ( $name == '' ) {
    echo "name can't be empty";
} elseif ( strlen( $name ) < 3 ) {
    echo "name is too short";
} else if ( strlen( $name ) > 40 ) {
    echo "name is too long";
} else if ( $username == '' ) {
    echo "username can't be empty";
} elseif ( strlen( $username ) < 3 ) {
    echo "username is too short";
} elseif ( strlen( $username ) > 40 ) {
    echo "username is too long";
} else if ( $email == '' ) {
    echo "email can't be empty";
} elseif ( $password == '' ) {
    echo "password can't be empty";
} elseif ( strlen( $password ) < 6 ) {
    echo "password contain at least 6 character";
} else {

    $flagName = false;

    for ( $i = 0; $i < strlen( $name ); $i++ ) {
        if (  ( $name[$i] >= 'A' && $name[$i] <= 'Z' ) || ( $name[$i] >= 'a' && $name[$i] <= 'z' ) || ( $name[$i] == " " ) ) {
            $flagName = true;
        } else {
            echo "name conatin alphabets and white space" . '<br>';
            $flagName = false;
            break;
        }
    }

    $flagUsername = false;
    for ( $i = 0; $i < strlen( $username ); $i++ ) {
        if (  ( $username[$i] >= 'A' && $username[$i] <= 'Z' ) || ( $username[$i] >= 'a' && $username[$i] <= 'z' ) || ( $username[$i] == " " ) ) {
            $flagUsername = true;
        } else {
            echo "username conatin alphabets and white space" . '<br>';
            $flagUsername = false;
            break;
        }
    }

    $special = false;
    $upper = false;
    $lower = false;
    $number = false;

    for ( $i = 0; $i < strlen( $password ); $i++ ) {
        if ( $password[$i] === '$' || $password[$i] === '@' || $password[$i] === '#' || $password[$i] === '&' ) {
            $special = true;
        } elseif ( $password[$i] >= 'A' && $password[$i] <= 'Z' ) {
            $upper = true;
        } elseif ( $password[$i] >= 'a' && $password[$i] <= 'z' ) {
            $lower = true;
        } elseif ( $password[$i] >= 0 && $password[$i] <= 9 ) {
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

    $checkPass = ( $special == true && $upper == true && $lower == true && $number == true );

    if ( $flagName == true && $flagUsername == true && $checkPass ) {
        require_once '../model/userModel.php';
        $result = updateUser( $id, $name, $username, $email, $password, $active );
        if ( $result ) {
            $_SESSION['message'] = "User updated Successfully";
            header( "location:../view/editUser.php?id=" . $id );
        } else {
            echo "Error Occur";
        }
    }

}

?>