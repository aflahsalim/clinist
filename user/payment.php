<?php
include("connection.php");
include("session.php");
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<h1>Payment method</h1><br>
<form action="" method="POST">
<input type="radio" value="Debit/Credit/ATM Cards" name="payment">
<label class="font-medium">Pay with Debit/Credit/ATM Cards</label><br><br><br>
<input type="radio" value="Net Banking" name="payment">
<label class="font-medium">Net Banking</label><br><br><br>
<input type="radio" value="UPI" name="payment">
<label class="font-medium">UPI Apps</label><br><br><br>
<input type="radio" value="Pay on Vist" name="payment">
<label class="font-medium">Pay on Visit</label><br><br><br>
<input type="submit" value="pay"name="sbtBtn" placeholder="name"><br>
</form>
</html>

<?php
if(isset($_POST['sbtBtn'])){
$payment = $_POST['payment'];

$selectquery="SELECT id FROM appointment ORDER BY id DESC LIMIT 1";
$result = $con->query($selectquery);
$row = $result->fetch_assoc();
$id=$row['id'];

  $insQuery = mysqli_query($con, "UPDATE appointment SET payment='$payment' where id='$id'");
if($insQuery){
echo  include header('location: userdashboard.php');
}
else {
echo "Error. Please try again";
}
}




?>