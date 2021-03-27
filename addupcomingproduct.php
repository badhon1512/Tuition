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

     $iderror=$nameerror=$descriptionerror="";
     $id=$name=$description='';
     $valid=true;

     

     if($_SERVER["REQUEST_METHOD"]=="POST")
     {

      $id=$_POST['id'];
     $name=$_POST['name'];
    
     $description=$_POST['description'];
    

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

         


  if($valid)
   {

    include './DbController/db.php';
     
    

    $sql="INSERT INTO  upcomingproducts
  VALUES ('$id','$name','$description')";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


     
   }
       
      
  }



?>

    <div >
    
    <h1 >Add Upcoming product</h1>

    <form method="POST" action="">
    
    <label for="">Product Id</label>
    <input style="margin-left:50px"   type="text" id="id" name="id" placeholder="Product Id"/>
    <?php echo $iderror; ?>
    <br>
    <br>


    <label for="">Product name</label>
    

    <input style="margin-left:30px"    type="text" id="name" name="name" placeholder="Product Name"/>
    <?php echo $nameerror; ?>
    <br>
    <br>

    <label for="">Product Description</label>
    <input   type="text" id="description" name="description" placeholder="Product Description"/>

    <?php echo $descriptionerror; ?>

    <br>
    <br>
    



    <button type="submit">Add Product</button>
    <button type="reset">Reset</button>

    
    
    </form>
    
    </div>

    <style>

      
    </style>
  
</body>
</html>