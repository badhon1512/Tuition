
<?php


if(isset($_GET['id']))
{
  include './DbController/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from products where id='$_GET[id]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: showproductinfo.php');
}


if(isset($_GET['uid']))
{
  include './DbController/db.php';

    
  $connect=new db();
  $conobj=$connect->OpenCon();
  
  
  
  $sql="delete from upcomingproducts where id='$_GET[uid]'";

  $connect->UpdateQuery($conobj,$sql);

  $connect->CloseCon($conobj);
  header('location: upcomingproductinfo.php');
}

?>