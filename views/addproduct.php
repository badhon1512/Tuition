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
     include ('../controllers/addproduct.php');


     ?>


    <div style="text-align: center; align-items:center">
    
    <h1 >Add product</h1>

    <form method="POST" action="">
    
    <input   type="text" id="id" name="id" placeholder="Product Id"/>
    <br>
    <?php echo $iderror;  ?>
    <br>
    

    <input   type="text" id="name" name="name" placeholder="Product Name"/>

    <br>
    <?php echo $nameerror;  ?>
    <br>
    <input   type="text" id="description" name="description" placeholder="Product Description"/>

    <br>
    
    <?php echo $descriptionerror;  ?>
    
    <br>
    

    <input   type="text" id="price" name="price" placeholder="Product Price"/>


    <br>

    <?php echo $priceerror;  ?>
    <br>
    

    <input   type="text" id="quantity" name="quantity" placeholder="Product Quantity"/>
    <br>
    <?php echo $quantityerror;  ?>
    <br>


    <button type="submit">Add Product</button>
    <button type="reset">Reset</button>

    
    
    </form>
    
    </div>
  
</body>
</html>