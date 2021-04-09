<?php


session_start();
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
       
            if($_POST["username"]==="salim12" && $_POST["password"]="123")
            {
              $_SESSION["username"]="salim";

              header("Location: home.php");
            }
            else{
              header("Location: login.php");
            }
      }

?>
