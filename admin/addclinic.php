<?php
include('session.php');
include('connection.php');
?>


<html>
<head>  
	<link rel="stylesheet" href="">
	<div class="">
		<head>
		<form action="" method="post">
			<h1>Insert Clinic Details</h1><br>
			NAME : <input type="text" name="name" placeholder="Name"/><br><br>
                  EMAIL : <input type="email" name="email" placeholder="eamil"/><br><br>
                  PASSWORD : <input type="password" name="password" placeholder="password"/><br><br>
                  LOCATION : <input type="text" name="location" placeholder="location"/><br><br>
                  PHONE NO : <input type="number" name="number" placeholder="number"/><br><br>
                  <input type="submit" name="sbtBtn" placeholder="name"><br>
		</form>
   	</div>
</head>
</html>


<?php

if(isset($_POST['sbtBtn'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$location = $_POST['location'];
$number = $_POST['number'];
$id =$_SESSION['id'];
$insQuery = mysqli_query($con, "INSERT INTO clinic(name,email,password,location,number) VALUES('$name','$email','$password','$location','$number')");
if($insQuery){
echo "Insert Successfull";
}
else {
echo "Error. Please try again";
}
}
?>