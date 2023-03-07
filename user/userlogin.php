<?php      
include('connection.php');
?>



<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/login.css">

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <input id="user-email" class="form-content" placeholder="Email" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div><br><br>
        <input id="user-password" class="form-content" placeholder="Password" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <a href="usersignup.php" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>


<?php
session_start();
if(isset($_POST['submit'])){
$email = $_POST['email'];  
$password = $_POST['password'];    
      
$sql = "select *from users where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
   
if($count == 1){  
	$_SESSION['id']= $row['id'];
	header("location: userprofile.php");
}  
else{  
    echo "<h1> Login failed. Invalid email or password.</h1>";  
}  	
}   
?>                    