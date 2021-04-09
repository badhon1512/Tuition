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


 ?>
  <div>



  



  <ul class="homebutton" style="background-color: cyan; padding:10px; width:20%;  float:left">

 <li><a target="iframe_a" href="addproduct.php">Add Product</a></li>
  <br>
  <li><a target="iframe_a" href="showproductinfo.php">Product Info</a></li>
  <br>

  <li><a target="iframe_a" href="addupcomingproduct.php">Add Upcoming product</a></li>
  <br>

  <li><a target="iframe_a" href="upcomingproductinfo.php">Show Upcoming product</a></li>
  <br>

  <li><a target="iframe_a" href="medicalinfo.php">Medical Info</a></li>
  <br>


  <li><a target="iframe_a" href="contacttoadmin.php">Contact to admin</a></li>
  <br>



  <li><a target="iframe_a" href="showprofile.php">Profile Info</a></li>
  <br>


  <li><a target="iframe_a" href="passwordchange.php">Change Password</a></li>
  <br>
  
  
  </ul>



  <iframe  style="float:left; margin:20px" name="iframe_a" height="600px" width="70%" title="Iframe Example"></iframe>

  
  </div>


  <style>


.homebutton li a{
    
    text-decoration: none;
    margin-bottom:5px;
    background-color: red;
    padding: 5px;
    margin: 10px;
 }

 .homebutton li a:hover{
    background-color: rgb(250,10,100);
 }

  </style>
  
</body>
</html>