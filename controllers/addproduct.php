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

    include '../models/db.php';
     
    

    $sql="INSERT INTO  products
  VALUES ($id,'$name','$description', '$quantity','$price','123')";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


     
   }
       
      
  }



?>





 