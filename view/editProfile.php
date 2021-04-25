<?php

	$title = 'Edit Profile';
	include_once('header.php');
	$id = $_COOKIE['id'];
	
?>

<body style="background-color: white">

   <?php
        session_start();
            if (isset($_SESSION['message'])) {?>
                <div style="margin-left: 250px; margin-top: 70px;margin-bottom: -70px; color: red; background-color: #81D89C;color: #ffffff; padding: 20px 30px; font-size: 1.2rem; width: 84%" >
                    <?php   echo $_SESSION['message'];
                     unset($_SESSION['message']);?>
                </div>          
        <?php       
            }
        ?>

    <div class="side-bar ">
        <?php include('link.php'); ?>
    </div>


    <?php require_once('../model/userModel.php');
			$row = getUserByID($id);
			$img = $row['image'];
		?>
    <div class="editProfile">
        <div>
            <?php echo "<img src='../assets/profile/".$row['image']."'width='150px' heoght='150px'";  ?><br><br><br>
        </div>
        <button id="changeProfilePicture"><a href="changeProfilePicture.php?id=<?php echo $id;?>"
                style="color: black;">change Profile Picture</a></button>
        <div id="edit-containt">
            <form method="POST" onsubmit="return profileValidation()" action="../controller/editProfile.php">
                <input id="name1" type="text" name="name" placeholder="Name..."
                    value="<?php echo $_COOKIE['name']; ?>"><br>
                <label id="lname" style="color: red; font-size: .8rem;"></label><br>
                <input id="username1" type="text" name="username" placeholder="username..."
                    value="<?php echo $_COOKIE['username']; ?>"><br>
                <label id="luser" style="color: red; font-size: .8rem;"></label><br>
                <input id="email1" type="email" name="email" placeholder="Email..."
                    value="<?php echo $_COOKIE['email']; ?>"><br>
                <label id="lemail" style="color: red; font-size: .8rem;"></label><br>
                <div style="padding: 30px 0px;">
                    <button style="margin-right: 30px;"><a href="viewProfile.php">Cancel</a></button>
                    <input id="button" type="submit" name="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

    <script>
		name.onfocus = function() {
			lname.innerText = "";
			name.style.border = 'none';
		};

		username.onfocus = function() {
			luser.innerHTML = "";
			username.style.border = 'none';
		};
		email.onfocus = function() {
			lemail.innerHTML = "";
			email.style.border = 'none';
		};
    </script>
</body>

</html>