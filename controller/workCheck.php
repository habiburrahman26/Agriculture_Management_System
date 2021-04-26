<?php
session_start();
require_once '../model/workModel.php';

if ( isset( $_POST['submit'] ) ) {

    $username = $_POST['username'];
    $task = $_POST['task'];
    $email = $_POST['email'];
    $period = $_POST['period'];
    $location = $_POST['location'];
    $salery = $_POST['salery'];

    if ( $username == "" || $task == "" || $email == "" || $period == "" || $location == "" || $salery == "" ) {
        echo "Invalid information.	Please try again!";
    } else {

        $user = [
            'username' => $username,
            'task'     => $task,
            'email'    => $email,
            'period'   => $period,
            'location' => $location,
            'salery'   => $salery,
        ];

        $status = insertWork( $user );

        if ( $status ) {
            header( 'location: ../view/workList.php' );
        } else {
            echo "Something Error";
        }
    }
} else {
    echo "Sorry";
}
?>