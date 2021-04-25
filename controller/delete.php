
<?php


if(isset($_GET['id']))
{
  include '../models/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from products where id='$_GET[id]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: ../views/showproductinfo.php');
}


if(isset($_GET['uid']))
{
  include '../models/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from upcomingproducts where id='$_GET[uid]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: ../views/upcomingproductinfo.php');
}

?>