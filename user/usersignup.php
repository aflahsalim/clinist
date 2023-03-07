<?php
include('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/signup.css">

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>SIGNUP</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
	  <input id="user-name" class="form-content" placeholder="Name" type="name" name="name" autocomplete="on" required />
        <div class="form-border"></div><br><br>
        <input id="user-email" class="form-content" placeholder="Email" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div><br><br>
        <input id="user-password" class="form-content" placeholder="Password" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="SIGNUP" />
        <a href="userlogin.php" id="signup">Already have an account?</a>
      </form>
    </div>
  </div>
</body>



<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$insQuery = mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
if($insQuery){
header('location:userlogin.php');
}
else {
echo "Error. Please try again";
}
}
?>