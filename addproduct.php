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

     $iderror=$nameerror=$descriptionerror=$quantityerror=$priceerror="";
     $id=$name=$description=$quantity=$price='';
     $valid=true;

     

     if($_SERVER["REQUEST_METHOD"]=="POST")
     {

      $id=$_POST['id'];
     $name=$_POST['name'];
     $price=$_POST['price'];
     $description=$_POST['description'];
     $quantity=$_POST['quantity'];

         if($id=="")
         {
           $iderror="please insert product id";
           $valid=false;
         }

         if($_POST['name']=="")
         {
           $nameerror="please insert product Name";
           $valid=false;
         }

         if($_POST['description']=="")
         {
           $descriptionerror="please insert product description";
           $valid=false;
         }

         if($_POST['quantity']=="")
         {
           $quantityerror="please insert product quantity";
           $valid=false;
         }
         if($_POST['price']=="")
         {
           $priceerror="please insert product price";
           $valid=false;
         }


  if($valid)
   {

    include './DbController/db.php';
     
    

    $sql="INSERT INTO  products
  VALUES ('$id','$name','$description', '$quantity','$price','123')";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


     
   }
       
      
  }



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