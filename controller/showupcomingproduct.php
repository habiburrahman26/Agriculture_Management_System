<?php

include "../models/db.php";
$connect=new db();
$conobj=$connect->OpenCon();
if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['id']!="" )
  {
    $sql="SELECT * FROM upcomingproducts where id=$_POST[id]";
  }
  else{
    $sql="SELECT * FROM upcomingproducts";
  }
$result=$connect->SelectQuery($conobj,$sql);

?>