<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: police_1.php");
   }
      else{
         $err = "You are logged out";
         echo '<script>alert("You are logged out")</script>';
      }
?>

