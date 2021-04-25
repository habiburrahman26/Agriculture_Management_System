<?php
  
if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['message']!="")
{

  include('../models/db.php');
 $sql="insert into contact values('1','salim','$_POST[message]')";
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  if($connect->InsertQuery($conobj,$sql))
  {
    echo "Message send successfully";
  }
  else{
    echo "Message send Failed";

  }
  $connect->CloseCon($conobj);
}


?>