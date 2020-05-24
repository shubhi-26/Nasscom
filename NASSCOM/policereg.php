<?php
session_start();

// initializing variables
$id="";
$email="";
$password="";
$name="";
$age="";
$gender="";
$position="";
$area="";
$city="";
$contact="";
$error = array(); 
$_SESSION['success'] = ""; 

// connect to the database
$db = mysqli_connect('localhost:3306', 'root', 'joey@161826', 'police');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $age= mysqli_real_escape_string($db, $_POST['age']);
  $gender= mysqli_real_escape_string($db, $_POST['gender']);
  $position= mysqli_real_escape_string($db, $_POST['position']);
  $area= mysqli_real_escape_string($db, $_POST['area']);
  $city= mysqli_real_escape_string($db, $_POST['city']);
  $contact= mysqli_real_escape_string($db, $_POST['contact']);
    

  if ($user) { // if user exists
    if ($user['id'] === $id) {
            //encrypt the password before saving in the database
            $query = "INSERT INTO users (id,email,password,name,age,gender,position,area,city,contact) 
                      VALUES('$id','$email','$password','$name','$age','$gender','$position','$area','$city','$contact')";
            mysqli_query($db, $query);
            $_SESSION['id'] = $id;
            $_SESSION['success'] = "You have registered successfully";
            header('location: design_p.html');
    }

    if ($user['email'] === $email) {
            $query = "INSERT INTO users (id,email,password,name,age,gender,position,area,city,contact) 
                      VALUES('$id','$email','$password','$name','$age','$gender','$position','$area','$city','$contact')";
            mysqli_query($db, $query);
            $_SESSION['id'] = $id;
            $_SESSION['success'] = "You have registered successfully";
            header('location: design_p.html');   
    }

    
  }

  
}
    ?>

