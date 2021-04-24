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
  include ('../controller/addproduct.php');
     

     ?>


    <div style="text-align: center; align-items:center">
    
    <h1 >Add product</h1>

    <form  onsubmit="return Validation()" method="POST" action="" enctype="multipart/form-data">
    <input   type="text" id="id" name="id" placeholder="Product Id"/><br><?php echo $iderror;  ?>
    <span id="iderror"></span>
    <br>
    <input   type="text" id="name" name="name" placeholder="Product Name"/><br><?php echo $nameerror;  ?>
    <span id="nameerror"></span>
    <br>
    <input   type="text" id="description" name="description" placeholder="Product Description"/><br><?php echo $descriptionerror;  ?>
    <span id="descriptionerror"></span>
    <br>
    <input   type="text" id="price" name="price" placeholder="Product Price"/><br><?php echo $priceerror;  ?>
    <span id="priceerror"></span>
    <br>
    <input   type="text" id="quantity" name="quantity" placeholder="Product Quantity"/><br><?php echo $quantityerror;  ?>
    <span id="quantityerror"></span>
    <br>
    <input style="margin-left: 80px;" name="fileToUpload" type="file" placeholder="Picture">
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
      if(document.getElementById('price').value=="")
      {
        document.getElementById('priceerror').textContent="please insert product price";
        valid=false;      
      }
      if(document.getElementById('quantity').value=="")
      {
        document.getElementById('quantityerror').textContent="please insert product quantity";
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