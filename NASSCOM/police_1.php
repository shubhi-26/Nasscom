<?php
   include"police.php";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //id, username and password sent from form 
      $myid = mysqli_real_escape_string($db,$_POST['id']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM signup where id='$myid' and password='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['login_police'] = $myid;
         header("location: design1.html");
      }
      else 
      {
          
         $error = "Your Login ID or Password is invalid";
         echo '<script>alert("Your Login ID or Password is invalid")</script>';
      }
   }
?>

