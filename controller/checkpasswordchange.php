<?php

     $password=$newpassword=$cnewpassword="";
     $passerror=$newpasserror=$cnewpasserror="";
     $valid=true;

     if($_SERVER["REQUEST_METHOD"]=="POST")
     {

      $password=$_POST["password"];
      $newpassword=$_POST["newpass"];
      $cnewpassword=$_POST["cnewpass"];


      if($password=="")
      {
        $passerror="Please insert your current password";
        $valid=false;
      }


      if($newpassword=="")
      {
        $newpasserror="Please insert your new password";
        $valid=false;
      }

      if($newpassword!=$cnewpassword)
      {
        $newpasserror="Confirm password must match";
        $valid=false;
      }


      if($valid==true)
      {
        //session_start();

          include('../model/db.php');

          $db=new db();
          $conn=$db->OpenCon();


          $sql="select password from users where id='$_SESSION[id]'";

          $result=$db->SelectQuery($conn,$sql);
          $result=$result->fetch_assoc();

          if(count($result)>0)
          {
              if($password!=$result['password'])
              {
                echo "Your current password is wrong";
              }
              else{

                $sql2="update users set password='$newpassword' where id='$_SESSION[id]'";
                if($db->UpdateQuery($conn,$sql2))
                {
                  echo "password changed successfully";
                }
              }

             
          }
          $db->CloseCon($conn);




      }


      

      
        



     }




?>