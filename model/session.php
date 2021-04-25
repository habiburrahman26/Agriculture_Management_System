<?php
	session_start();
	if(isset($_SESSION['status'])){
	    if (isset($_SESSION['login_user'])) {
	        $current_user =  trim($_SESSION['login_user']);
	    } elseif (isset($_COOKIE['remember'])) {
	        $current_user =  trim($_COOKIE['remember']);
	    }
	    if ($current_user == '') {
			session_destroy();
			setcookie('remember', "");
	        header("location:login.php");
	        die();
	    }
	} else {
		session_destroy();
		setcookie('remember', "");
	    header("location:login.php");
	    die();
	}
?>