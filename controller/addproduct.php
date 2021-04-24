<?php

     $iderror=$nameerror=$descriptionerror=$quantityerror=$priceerror="";
     $id=$name=$description=$quantity=$price='';
     $valid=true;


     

     if($_SERVER["REQUEST_METHOD"]=="POST")
     {

      $fname=basename($_FILES["fileToUpload"]["name"]);
      //echo $fname;

      $target_dir = "../assets/picture/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

      //echo $target_file;

      $id=$_POST['id'];
     $name=$_POST['name'];
     $price=$_POST['price'];
     $description=$_POST['description'];
     $quantity=$_POST['quantity'];

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

         if($_POST['quantity']=="")
         {
           $quantityerror="please insert product quantity";
           $valid=false;
         }
         if($_POST['price']=="")
         {
           $priceerror="please insert product price";
           $valid=false;
         }


  if($valid)
   {

    include '../model/db.php';
     
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    $sql="INSERT INTO  products
  VALUES ($id,'$name','$description', '$price','$quantity','$fname')";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


     
   }
       
      
  }



?>





 