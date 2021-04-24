<?php

     $iderror=$nameerror=$descriptionerror="";
     $id=$name=$description='';
     $valid=true;

     

     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
       

      $id=$_POST['id'];
     $name=$_POST['name'];  
     $description=$_POST['description'];
    

         if($id=="")
         {
           $iderror="please insert product id";
           $valid=false;
         }

         if($_POST['name']=="")
         {
           $nameerror="please insert product Name";
           $valid=false;
         }

         if($_POST['description']=="")
         {
           $descriptionerror="please insert product description";
           $valid=false;
         }

         


  if($valid)
   {

    include '../model/db.php';
     
    

    $sql="INSERT INTO  upcomingproducts
  VALUES ('$id','$name','$description')";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


     
   }
       
      
  }



?>