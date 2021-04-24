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
  include('../controllers/contact.php');


?>

<div style="margin: 0 auto; text-align:center">
<h1>Contact with admin</h1>

  <form action="" method="POST">
  
       <textarea name="message" id="" cols="30" rows="10"></textarea>

       <button type="submit">Send</button>
  
  
  </form>
</div>

  
</body>
</html>