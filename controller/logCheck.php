<?php

session_start();
require_once '../model/userModel.php';

if ( isset( $_POST['submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( $username == "" || $password == '' ) {
        echo "Please enter your name and password";
    } else {

        $row = validation( $username, $password );

        if ( $row ) {
            $type = $row['type'];
            $active = $row['active'];

            if ( $type == 'admin' && $active == 1 ) {
                $id = $row['id'];
                $email = $row['email'];
                $name = $row['name'];

                setcookie( 'id', $id, time() + 3600, '/' );
                setcookie( 'name', $name, time() + 3600, '/' );
                setcookie( 'username', $username, time() + 3600, '/' );
                setcookie( 'email', $email, time() + 3600, '/' );
                setcookie( 'status', 'true', time() + 3600, '/' );
                $_SESSION['password'] = $password;
                header( 'location:../view/dashboard.php' );

            } elseif ($type == 'farmer' && $active == 1) {

                $id = $row['id'];
                $email = $row['email'];
                $name = $row['name'];
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['name']=$username;
                setcookie( 'email', $email, time() + 3600, '/' );
                setcookie( 'status', 'true', time() + 3600, '/' );
            	 header('location:../view/farmerHome.php');

            }elseif ($type == 'worker' && $active == 1) {
                $id = $row['id'];
                $email = $row['email'];
                $name = $row['name'];
                setcookie( 'id', $id, time() + 3600, '/' );
                setcookie( 'name', $name, time() + 3600, '/' );
                $_SESSION['name']=$username;
                setcookie( 'email', $email, time() + 3600, '/' );
                setcookie( 'status', 'true', time() + 3600, '/' );
                 header('location:../view/contact.html');
            }elseif ($type == 'buyer' && $active == 1) {
                $id = $row['id'];
                $email = $row['email'];
                $name = $row['name'];
                setcookie( 'id', $id, time() + 3600, '/' );
                setcookie( 'name', $name, time() + 3600, '/' );
                $_SESSION['name']=$username;
                setcookie( 'email', $email, time() + 3600, '/' );
                setcookie( 'status', 'true', time() + 3600, '/' );
                 header('location:../view/buyerDashboard.php');
            } elseif ( $active == '0' ) {
                $_SESSION['message'] = "You account is deactive";
                header( 'location:../view/login.php' );
            }
        } else {

            $_SESSION['message'] = "Incorrect username or password";
            header( 'location:../view/login.php' );
        }
    }
}

?>