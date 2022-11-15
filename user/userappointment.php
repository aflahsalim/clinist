<?php
include('session.php');
include('connection.php');
$sql ='select * from clinic';
$result = mysqli_query($con,$sql);
?>


<html>
<head>  
	<link rel="stylesheet" href="">
	<div class="">
		<head>
		<form action="" method="post">
			<h1>Appointment Booking</h1><br>
			Select Clinic : 
			<select name= "clinic" onchange="getUser(this.value)">
			<?php
			while ($row = $result->fetch_assoc()){
				$name =$row['name'];
				$id =$row['id'];
				

			echo '<option value="'.$id.'">'.$name.'</option>';
			}
			?>
			</select><br><br>
			Date Of Book : 
			<input type="date" name="date"><br><br>        
			Select The Time Slot : 
			<select value="select" name="slot">
  			<option value="8am to 10am">8am to 10am</option>  
  			<option value="10am to 12pm">10am to 12pm</option>  
  			<option value="1pm to 3pm">1pm to 3pm</option>  
  			<option value="3pm to 5pm">3pm to 5pm</option>
			</select><br><br><br>
			<input type="submit" name="sbtBtn" placeholder="name"><br>
		</form>
   	</div>
</head>
</html>


<?php
if(isset($_POST['sbtBtn'])){
$clinic = $_POST['clinic'];
$userid =$_SESSION['id'];
$date = $_POST['date'];
$slot = $_POST['slot'];
$insQuery = mysqli_query($con, "INSERT INTO appointment VALUES('','$clinic','$userid','$date','$slot')");
if($insQuery){
echo "Booked Successfully";
}
else {
echo "Error. Please try again";
}
}
?>
