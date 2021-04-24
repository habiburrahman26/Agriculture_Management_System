<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table  id="txtHint" style="align:center;border:1px; width:100%; border: 1px solid black;border-collapse:collapse;">

<tr>
 
<th >Id</th>
<th >Name</th>

<th >description</th>
<th >quantity</th>

<th >price</th>
<th >picture</th>




</tr>



<?php
$id=$tablename="";
include '../models/db.php';


$id = $_GET['id'];
$tablename=$_GET['tablename'];



 
 $connect=new db();
 $conobj=$connect->OpenCon();
if (!$conobj) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM $tablename WHERE id = '$id'";
$result=$connect->SelectQuery($conobj,$sql);




while($row = $result->fetch_assoc()) {

      echo "<td >$row[id]</td>";
      echo "<td >$row[name]</td>";
      echo "<td >$row[description]</td>";
      echo "<td >$row[quantity]</td>";
      echo "<td >$row[price]</td>";
      echo "<td ><img src='../assets/picture/$row[picture]'alt=''></td>";
      echo "<br>";





  echo "</tr>";

      

}
echo "</table>";
$connect->CloseCon($conobj);
?>
</body>
</html>