<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php
 include('header.php');
 include('leftmenu.php');

    include('../controllers/checkpasswordchange.php');

?>

<div style="text-align: center;">
    
    
    <h1>Password Change</h1>
    <br>

    <form action="" method="POST">

    <input type="password" name="password" placeholder="Current Password"/>

    <br>
    <?php echo $passerror; ?>
    <br>
    <input type="password" name="newpass" placeholder="New Password"/>
    <br>
    <?php echo $newpasserror; ?>
    <br>
    <input type="password" name="cnewpass" placeholder="Confirm password Password"/>
    <br>
    <br>

    <button type="submit">Change Password</button>
    <button type="reset">Reset</button>

    
    </form>
    </div>
  
</body>
</html>