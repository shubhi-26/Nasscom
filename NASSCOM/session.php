<?php
   include('police.php');
   session_start();
   
   $user_check = $_SESSION['login_police'];
   
   $ses_sql = mysqli_query($db,"select id from signup where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   
   if(!isset($_SESSION['login_police'])){
      header("location:police_1.php");
      die();
   }
?>