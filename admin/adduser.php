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
			<h1>Insert User Details</h1><br>
			NAME : <input type="text" name="name" placeholder="Name"/><br><br>
                  EMAIL : <input type="email" name="email" placeholder="eamil"/><br><br>
                  PASSWORD : <input type="password" name="password" placeholder="password"/><br><br>
                  GENDER : <input type="radio" name="gender" value="m">
                  <label>Male</label>
                  <input type="radio" name="gender" value="f">
                  <label>Female</label>
                  <br><br>
                  DATE OF BIRTH : <input type="date" name="dob"><br><br>                  
                  ADDRESS : <input type="text" name="address" placeholder="address"/><br><br>
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
$dob = $_POST['dob'];
$address = $_POST['address'];
$number = $_POST['number'];
$id =$_SESSION['id'];
$insQuery = mysqli_query($con, "INSERT INTO users(name,email,password,dob,address,number) VALUES('$name','$email','$password','$dob','$address','$number')");
if($insQuery){
echo "Insert Successfull ";
}
else {
echo "Error. Please try again";
}
}
?>