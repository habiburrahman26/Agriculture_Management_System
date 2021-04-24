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
     include('../controller/registration.php');

?>



      <div style="margin: 100px 400px;">

       <form action="" method="POST">
         <table>
         
          <tr>
          <td><label for="">Id :</label></td>
          <td><input type="text" name="id"></td>
          <td><?php echo $iderror;   ?></td>
          </tr>


          <tr>
          <td><label for="">Name :</label></td>
          <td><input type="text" name="name"></td>
          <td><?php echo $nameerror;   ?></td>
          </tr>


          <tr>
          <td><label for="">Email :</label></td>
          <td><input type="text" name="email"></td>
          <td><?php echo $emailerror;   ?></td>
          </tr>


          <tr>
          <td><label for="">Password :</label></td>
          <td><input type="password" name="password"></td>

          <td><?php echo $passworderror;   ?></td>
          </tr>


          <tr>
          <td><label for="">Confirm Password :</label></td>
          <td><input type="password" name="cpassword"></td>
          </tr>

          <tr>

          <td>User type</td>

          <td><select name="type" id="">
          
          <option value="admin">admin</option>
          <option value="farmer">farmer</option>
          <option value="buyer">buyer</option>
          <option value="worker">worker</option>
          </select></td>
          </tr>

          <tr>

          <td></td>
               <td><button type="submit">Register</button></td>
               <td><a href="./loginui.php">LogIn</a></td>
          </tr>

         </table>
       
       </form>
      
      </div>



      
  
</body>
</html>