<?php

session_start();
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $id = $_COOKIE['id'];

    require_once '../model/userModel.php';

    $result = updateProfile($id, $name, $username, $email);

    if ($result) {
        setcookie('name', $name, time() + 3600, '/');
        setcookie('username', $username, time() + 3600, '/');
        setcookie('email', $email, time() + 3600, '/');
        $_SESSION['message'] = "Profile update successfully";
        header('location:../view/editProfile.php?id=' . $id);
    } else {
        echo "profile not update";
    }

}
