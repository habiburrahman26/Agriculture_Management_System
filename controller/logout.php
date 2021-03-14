<?php
	
	if (isset($_COOKIE['status'])) {
		setcookie('status', 'false', time()-5000, '/');
		header('location:../view/home.html');
	}


?>