<?php
  session_start();
  session_destroy();
  include('../controller/LoginCheck.php');
  
  


?>
<div style="text-align: center; margin-top:200px">
<form action="" method="POST">

    <input type="text" name="id" placeholder="username">
     <br><?php  echo $iderror; ?> <br>

    <input type="password" name="password" placeholder="password">  <br> <?php  echo $passworderror; ?><br>

    <button type="submit">Login</button>

    <a href="./registrationui.php">Registration</a>



</form>

</div>

