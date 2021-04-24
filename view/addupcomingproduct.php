<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
     include('header.php');
     include('leftmenu.php');
     include('../controllers/addupcomingproduct.php');

?>


    <div >
    
    <h1 >Add Upcoming product</h1>

    <form onsubmit="return Validation()" method="POST" action="">
    
    <label for="">Product Id</label>
    <input style="margin-left:50px"   type="text" id="id" name="id" placeholder="Product Id"/>
    <span id="iderror"></span>
    <br>
    <br>
    <label for="">Product name</label>
    <input style="margin-left:30px"    type="text" id="name" name="name" placeholder="Product Name"/>
    <span id="nameerror"></span>
    <br>
    <br>
    <label for="">Product Description</label>
    <input   type="text" id="description" name="description" placeholder="Product Description"/>
    <span id="descriptionerror"></span>
    <br>
    <br>
    <button type="submit">Add Product</button>
    <button type="reset">Reset</button>

    
    
    </form>
    
    </div>

    
    <script>


    function Validation() { 

      let valid=true;



      if(document.getElementById('name').value=="")
      {
        document.getElementById('nameerror').textContent="please insert product name";
        valid=false;      
      }

      if(document.getElementById('id').value=="")
      {
        document.getElementById('iderror').textContent="please insert product id";
        valid=false;     
      }

      if(document.getElementById('description').value=="")
      {
        document.getElementById('descriptionerror').textContent="please insert product description";
        valid=false;      
      }

      if(valid==false)
      {
        return false;
      }
      else{
        return true;
      }



     }
        
    
    
    </script>
  
</body>
</html>