<?php
include('connection.php');
?>


<html>
<head>  
	<link rel="stylesheet" href="">
	<div class="">
		<head>
		<form action="" method="post">

			<h1>Signup to Clinist </h1>
			NAME : <input type="text" name="name" placeholder="Name"/><br><br>
			EMAIL : <input type="email" name="email" placeholder="Email"/><br><br>
			PASSWORD : <input type="password" name="password" placeholder="Password"/><br><br>
			<input type="submit" name="sbtBtn" placeholder="name"><br>

		</form>
   	</div>
	Already a user? <a href="userlogin.php">Login Here</a>
</head>
</html>



<?php
if(isset($_POST['sbtBtn'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$insQuery = mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
if($insQuery){
echo "Signup Successfull";
echo '<a href="userlogin.php">Login Here</a>';
}
else {
echo "Error. Please try again";
}
}
?>