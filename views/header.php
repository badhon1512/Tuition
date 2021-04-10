
<?php
session_start();

?>
<div style=" background-color: red;   height:80px">

<ul class="button" >
   <li style="float: left; "><img src="./165705284_1391399217860789_3212769307992041414_n.png" alt=""></li>
   <li  style="float: right; margin:30px;"><a href="loginui.php">Logout</a></li>


   <li  style="float: right; margin:30px; margin-right:100px;">Login as <?php

   echo $_SESSION["name"];
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

 img{

    height: 60px;
    
 }

 
</style>