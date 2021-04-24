<?php


      session_start();
      $id=$password="";
      $iderror=$passworderror="";
      $valid=true;

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {

            $id=$_POST['id'];
            $password=$_POST['password'];
            if($id=="")
            {
              $iderror="Please enter your id";
              $valid=false;
            }
            if($password=="")
            {
              $passworderror="Please enter your password";
              $valid=false;
            }


          }

          if($valid==true)
          {



            include('../model/db.php');
            $sql= "select * from users where id='$id' and password='$password'";

            $db=new db();
            $conn=$db->OpenCon();
            $data=$db->SelectQuery($conn,$sql);
            $data=$data->fetch_assoc();
            $type=$data['type'];

            
            if($type=="farmer")
            {

            $_SESSION['name']=$data['name'];

            $_SESSION['id']=$data['id'];
            $_SESSION['email']=$data['email'];
              header('location:./home.php');
            }

            $db->CloseCon($conn);




          }

?>
