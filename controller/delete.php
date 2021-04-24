
<?php


if(isset($_GET['id']))
{
  include '../model/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from products where id='$_GET[id]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: ../view/showproductinfo.php');
}


if(isset($_GET['uid']))
{
  include '../model/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from upcomingproducts where id='$_GET[uid]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: ../view/upcomingproductinfo.php');
}

?>