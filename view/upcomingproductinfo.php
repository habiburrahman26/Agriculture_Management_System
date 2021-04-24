<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<?php

include('header.php');
include('leftmenu.php');


?>
<body style="">
<div style="  margin-left:200px;">

   <h2>Product Information</h2>
   <button><a href="./upcomingproductinfo.php">Refresh</a></button>
   <br><br>
   
    <input type="text" id='productid'>
    <button onclick="searchProduct()">Seacrh</button>
  

   
<?php


   include('../controller/showupcomingproduct.php');


  echo "<table id='product' border='1px'>";

  echo "<tr>";

  echo "<th>Id</th>";
  echo "<th>name</th>";
  echo "<th>Description</th>";
  echo "<th>update</th>";
  echo "<th>delete</th>";


  echo "</tr>";

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
     

      echo "<td >$row[id]</td>";
      echo "<td >$row[name]</td>";
      
      echo "<td >$row[description]</td>";
     

      echo "<td><p><a href='./updateupcomingproductui.php?id=$row[id]'>update</a></p></td>";

      echo "<td><p><a href='../controllers/delete.php?uid=$row[id]'>delete</a></p></td>";
      
      echo "<br>";





  echo "</tr>";


      

    }

    echo "</table>";
    
  } else {
    echo "0 results";
  }

  $connect->CloseCon($conobj);
  
?>


<script>
function searchProduct() {
  var id=document.getElementById("productid").value;
 
  if (id == "") {
   
    return;
  } else {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product").innerHTML = this.responseText;
      }
    }
    xhttp.open("GET","../controllers/upcomingproductsearch.php?id="+id+"&tablename="+'upcomingproducts',true);
    xhttp.send();
  }
}
  
</script>

  
 

</body>
</html>