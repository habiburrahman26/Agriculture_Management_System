
<?php
if(isset($_POST['id']))
{
   

  $sql="UPDATE products
SET name = '$_POST[name]', description = '$_POST[description]', price=$_POST[price],quantity=$_POST[quantity]
  WHERE id=$_POST[id]";


include '../model/db.php';
     
     
      
      $connect=new db();
  $conobj=$connect->OpenCon();
  
  $result=$connect->UpdateQuery($conobj,$sql);
  $connect->CloseCon($conobj);

  header('location:../view/showproductinfo.php');
  
  

  
}


if(isset($_POST['uid']))
{
   

  $sql="UPDATE upcomingproducts
SET name = '$_POST[name]', description = '$_POST[description]'
  WHERE id=$_POST[uid]";


include '../model/db.php';
     
     
      
      $connect=new db();
  $conobj=$connect->OpenCon();
  
  $result=$connect->UpdateQuery($conobj,$sql);
  $connect->CloseCon($conobj);

  header('location:../view/upcomingproductinfo.php');
  
  

  
}


?>