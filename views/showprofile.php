<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<div style="text-align: center;">
    
    <?php session_start(); ?>
    <h1>Profile Information</h1>
    <br>
    <br>
    <br>

    <h4>Name : <?php echo $_SESSION['name']; ?></h4>

    <h4>Id : <?php echo $_SESSION['id']; ?></h4>
    <h4>Email: <?php echo $_SESSION['email']; ?></h4>
    
    
    </div>
  
</body>
</html>