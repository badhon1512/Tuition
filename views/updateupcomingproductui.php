
<?php

if(isset($_GET['id']))
{
  include '../models/db.php';
 
 
  $sql="select * from upcomingproducts where id= $_GET[id]";
  $connect=new db();
$conobj=$connect->OpenCon();

$result=$connect->SelectQuery($conobj,$sql);
$connect->CloseCon($conobj);

$result=$result->fetch_assoc();

  
}

?>

<form action="../controllers/updateproduct.php" method="post">


<input type="hidden" name="uid" value=<?php echo $result['id'];   ?>>
<label for="">Name</label> <input type="text" name="name" value=<?php echo $result['name'];   ?>> <br> <br>
<label for="">description</label> <input type="text" value=<?php echo $result['description'];?> name='description'> <br>
<br>



<button type="submit">update</button>
</form>