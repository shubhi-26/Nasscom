
<!DOCTYPE html>
<html>
<head>

<style>

* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
   background-image: url("sid.jpg");
    background-size: cover;
}

.header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: black;
  text-align: center;
  border: 2px solid #B0C4DE;
  border-bottom: none;
  border-radius: 0px 0px 0px 0px;
  padding: 20px;
   font-family: 'Oswald', sans-serif;
        text-shadow: whitesmoke;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 2px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: black;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: black; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

.input-group select
{
    height: 30px;
  width: 95%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}

</style>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form id="signup" method="post" action="policereg.php">
  	
    <?php include('policereg.php'); ?>

      <div class="input-group">
      <input type ="text" placeholder="ID" name="id" id="id" value="<?php echo $id; ?>"">
      </div>

  	<div class="input-group">
    <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $email; ?>">
  	</div>

  	<div class="input-group">
  	  <input type="password" placeholder="Password" name="password" id="password" >
  	</div>

      	<div class="input-group">
  	  <input type="text" name="name" placeholder="Name" id="name">
  	</div>

      <div class="input-group">
      <input type="text" name="age"  placeholder="Age" id="age">
      </div>
       
       <div class="input-group">
         <select name="gender" placeholder="Gender" id="gender">
                <option > Select </option>
                 <option value="#">Male</option>
                 <option value="#">Female</option>
                <option value="#" >Other</option>
                </select>
        </div>

      <div class="input-group">
      <input type="text" name="position" placeholder="Position" id="position">
      </div>

      <div class="input-group">
      <input type="text" name="area"   placeholder="Area" id="area">
      </div>

      <div class="input-group">
      <input type="text" name="city" placeholder="City" id="city">
      </div>

      <div class="input-group">
      <input type="text" name="contact"  placeholder="Contact" id="contact">
      </div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Proceed</button>
  	</div>

  	<p>
  		Already a member? <a href="policelogin.html">Sign in</a>
  	</p>
  </form>
  
  <script src="gen_validatorv4.js" type="text/javascript"></script>
<script type="text/javascript">
var frmvalidator  = new Validator("signup");
frmvalidator.addValidation("id","req","Please provide your ID");
frmvalidator.addValidation("email","req","Please provide your email address");
frmvalidator.addValidation("password","req","Please provide your password");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("position","req","Please provide your position");
frmvalidator.addValidation("area","req","Please provide your area");
frmvalidator.addValidation("city","req","Please provide your city");
frmvalidator.addValidation("contact","req","Please provide your contact");
</script>
</body>
</html>