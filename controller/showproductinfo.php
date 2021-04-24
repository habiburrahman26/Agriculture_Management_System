<?php

include "../models/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();

  if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['id']!="" )
  {
    $sql="SELECT * FROM products where id=$_POST[id]";
  }
  else{
    $sql="SELECT * FROM products";
  }
  
  $result=$connect->SelectQuery($conobj,$sql);

?>