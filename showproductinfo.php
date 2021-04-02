<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="">
<div style="  margin-left:200px;">

   <h2>Product Information</h2>
<?php
include "./DbController/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM products";
  $result=$connect->SelectQuery($conobj,$sql);

  echo "<table border='1px'>";

  echo "<tr>";

  echo "<th>Id</th>";
  echo "<th>name</th>";
  echo "<th>Description</th>";

  echo "<th>quantity</th>";
  echo "<th>Price</th>";
  echo "<th>picture</th>";

  echo "<th>update</th>";
  echo "<th>delete</th>";



      





  echo "</tr>";

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
     

      echo "<td >$row[id]</td>";
      echo "<td >$row[name]</td>";
      
      echo "<td >$row[description]</td>";
      echo "<td>$row[quantity]</td>";
      echo "<td >$row[price]</td>";
      
      echo "<td >$row[picture]</td>";

      echo "<td><p><a href='./updateproductui.php?id=$row[id]'>update</a></p></td>";
      echo "<td><p><a href='./delete.php?id=$row[id]'>delete</a></p></td>";

     
      
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