
<?php
session_start();

?>
<div style=" background-color: rgb(204, 255, 255);    height:80px">

<ul class="button" >
   <li style="float: left; "><a href="./home.php"><img src="./165705284_1391399217860789_3212769307992041414_n.png" alt=""></a></li>

   
   <li  style="float: right; margin:30px;"><a href="loginui.php">Logout</a></li>

   <li  style="float: right; margin:30px;"><a href="./registrationui.php">Registration</a></li>


   <li  style="float: right; margin:30px; margin-right:100px;">Login as <?php

   echo $_SESSION["name"];
   ?></li>

</ul>
</div>



<style>


 li{

    list-style-type: none;
   
    
 }
.button li a{
    padding:10px;
    text-decoration: none;
    
    margin: 10px;
 }

 .button li a:hover{
    background-color: rgb(255, 153, 255);
 }

 img{

    height: 60px;
    
 }

 
</style>