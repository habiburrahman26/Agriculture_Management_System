<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body style="">

<?php
   include('header.php');
   include('leftmenu.php');


?>
<div >
<h2>Medical Information</h2>
   
<?php


include "../models/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM medicalinformation";
  $result=$connect->SelectQuery($conobj,$sql);

  echo "<table border='1px'>";

  echo "<tr>";
  echo "<th>Id</th>";
  echo "<th>Crops name</th>";
  echo "<th>Diseases</th>";

  echo "<th>Testing Location</th>";
  



  echo "</tr>";

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
     

      echo "<td >$row[id]</td>";
      echo "<td >$row[name]</td>";
      
      echo "<td >$row[diseases]</td>";
      echo "<td>$row[location]</td>";
      
      
      echo "<br>";





  echo "</tr>";


      

    }

    echo "</table>";
    
  } else {
    echo "0 results";
  }

  $connect->CloseCon($conobj);
  
?>

  
 

</body>
</html>