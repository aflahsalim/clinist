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
			<h1>Update your profile</h1><br>
			NAME : <input type="text" name="name" placeholder="Name"/><br><br>
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
$gender = $_POST['gender'];
$number = $_POST['number'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$id =$_SESSION['id'];
$insQuery = mysqli_query($con,"UPDATE users SET name='$name',gender='$gender',dob='$dob',address='$address',number='$number' where id=$id");
if($insQuery){
echo "update Successfull";
}
else {
echo "Error. Please try again";
}
}
?>