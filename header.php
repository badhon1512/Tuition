
<?php
session_start();

?>
<div style=" background-color: red;   height:80px">

<ul class="button" >
   <li style="float: left; margin:30px;">AgricultureHub</li>
   <li  style="float: right; margin:30px;"><a href="login.php">Logout</a></li>


   <li  style="float: right; margin:30px; margin-right:100px;">Login as <?php

   echo $_SESSION["username"];
   ?></li>

</ul>
</div>



<style>


 li{

    list-style-type: none;
   
    
 }
.button li a{
    padding:10px;
    text-decoration: none;
    background-color: blue;
    margin: 10px;
 }

 .button li a:hover{
    background-color: rgb(250,10,100);
 }

 
</style>