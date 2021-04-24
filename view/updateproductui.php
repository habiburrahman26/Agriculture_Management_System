<?php

include('header.php');
include('leftmenu.php');


?>
<?php

    if(isset($_GET['id']))
    {
      include '../models/db.php';
     
     
      $sql="select * from products where id= $_GET[id]";
      $connect=new db();
  $conobj=$connect->OpenCon();
  
  $result=$connect->SelectQuery($conobj,$sql);
  $connect->CloseCon($conobj);
  
  $result=$result->fetch_assoc();
  
      
    }

?>

<form style="margin-top:80px;"  action="../controllers/updateproduct.php" method="post">
   

<input type="hidden" name="id" value=<?php echo $result['id'];   ?>>
   <label for="">Name</label> <input type="text" name="name" value=<?php echo $result['name'];   ?>> <br> <br>
   <label for="">description</label> <input type="text" value=<?php echo $result['description'];?> name='description'> <br>
   <br>

   <label for="">quantity</label> <input
   value=<?php echo $result['quantity'];?>
   name='quantity'
    type="text"> <br>
   <br>
   <label for="">price</label> <input type="text"
   value=<?php echo $result['price'];?>
   name="price"
   > <br>
   <br>

   <button type="submit">update</button>
</form>