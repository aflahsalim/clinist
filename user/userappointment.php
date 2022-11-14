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
			?>
			<option value="<?php echo $name; ?>"><?php echo $name ;?></option>
			<?php
			}
			?>
			</select><br><br>
			Date Of Book : 
			<input type="date" name="date"><br><br>        
			Select The Time Slot : 
			<select value="select" name="slot">
  			<option value="1">8am to 10am</option>  
  			<option value="2">10am to 12pm</option>  
  			<option value="3">1pm to 3pm</option>  
  			<option value="4">3pm to 5pm</option>
			</select><br><br><br>
			<input type="submit" name="sbtBtn" placeholder="name"><br>
		</form>
   	</div>
</head>
</html>


<?php
if(isset($_POST['sbtBtn'])){
$clinic = $_POST['clinic'];
$date = $_POST['date'];
$slot = $_POST['slot'];
$patientid =$_SESSION['id'];
$insQuery = mysqli_query($con, "INSERT INTO appointment VALUES('','$clinic','$date','$slot','$patientid')");
if($insQuery){
echo "Booked Successfully";
}
else {
echo "Error. Please try again";
}
}
?>
