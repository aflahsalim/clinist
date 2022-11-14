<?php      
session_start();
include('connection.php');
?>


<html>
<head>  
	<link rel="stylesheet" href="login.css">
	<div class="">
		<head>
		<form class="login-card" method="post">

			<h1>welcome admin </h1>
			EMAIL : <input type="email" name="email" placeholder="Email"/><br><br>
			PASSWORD : <input type="password" name="password" placeholder="Password"/><br><br>
			<input type="submit" name="sbtBtn" placeholder="name"><br>

		</form>
   	</div>
</head>
</html>



<?php
if(isset($_POST['sbtBtn'])){
$email = $_POST['email'];  
$password = $_POST['password'];    
      
$sql = "select *from admin where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
   
if($count == 1){  
	$_SESSION['id']= $row['id'];
	header("location: admindashboard.php");
}  
else{  
    echo "<h1> Login failed. Invalid email or password.</h1>";  
}  	
}   
?>                    