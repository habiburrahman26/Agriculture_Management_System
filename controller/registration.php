<?php
    $id=$name=$email=$password=$type="";

    $iderror=$nameerror=$emailerror=$passworderror=$typeerror=$cpassword="";
    $valid=true;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {

     $id=$_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $type=$_POST['type'];

    if($id=="")
    {
      $iderror="Must be filled up";
      $valid=false;
    }
    if($name=="")
    {
      $nameerror="Must be filled up";
      $valid=false;
    }
    if($email=="")
    {
      $emailerror="Must be filled up";
      $valid=false;
    }

    if($password=="")
    {
      $passworderror="Must be filled up";
      $valid=false;
    }

    else if($password!=$cpassword)
    {
      $passworderror="Password must be match";
      $valid=false;
    }


    if($valid==true)
    {
      include('../models/db.php');
      if($valid)
      {
      
        $sql3="SELECT * FROM users where id='$id'";
      
      
           
           $connect=new db();
           $conobj=$connect->OpenCon();
           $c=$connect->SelectQuery($conobj,$sql3);
           $connect->CloseCon($conobj);
           if($c->num_rows>0)
           {
            $iderror="This user id is already exist";
            $valid=false;
           }
           
      
      }
      
    }

    if($valid)
   {
    
    

    


$sql="INSERT INTO  users VALUES('$id','$name','$email','$password','$type')";

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


   }
   
    

    

   }


?>