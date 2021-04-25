<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/002-planting.png">
    <title>LogIn</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="log.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>

    <?php
		session_start();
			if (isset($_SESSION['message'])) {?>
    <div
        style="margin-left: 565px; margin-top: 130px; margin-bottom: -130px; background-color: #ffe3e6;color: black; padding: 16px 30px; font-size: .9rem; width: 26%; border-radius: 6px;border:1px solid #e89090;">
        <?php   echo $_SESSION['message'];
					 unset($_SESSION['message']);?>
    </div>
    <?php		
			}
		?>

    <div class="login">
        <h1>Log In</h1>
        <form method="POST" action="../controller/logCheck.php" onsubmit="return logValidation()">
            <input id="name" type="text" name="username" placeholder="Username..."><br>
            <label id="lname" style="font-size: .8rem;color: red;display: none;"></label><br>
            <input id="pass" type="password" name="password" placeholder="Password..."><br>
            <label id="lpass" style="font-size: .8rem;color: red;display: none;"></label><br>
            <a id="forget" href="">Forget password?</a>
            <input id="button" type="submit" name="submit" value="Log In">
        </form>
        <p>Not registerd?<a href="registration.html">Create an account</a></p>
    </div>

    <script>
		function logValidation() {
		const name = document.getElementById('name');
		const password = document.getElementById('pass');
		const lname = document.getElementById('lname');
		const lpass = document.getElementById('lpass');

		if (name.value.trim() == '' || name.value.trim() == null) {
			name.style.border = '1px solid red';
			lname.innerHTML = '*username is empty';
			return false;
		} else if (password.value.trim() == '' || password.value.trim() == null) {
			password.style.border = '1px solid red';
			lpass.innerHTML = '*password is empty';
			return false;
		} else {
			return true;
		}

	}
    /*name.onfocus = function() {
        name.style.border = 'none';
    }

    password.onfoucs = function() {
        password.style.border = 'none';
    }*/
    </script>
</body>

</html>