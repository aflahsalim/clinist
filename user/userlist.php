<?php
include ("connection.php");
include('session.php');
$query = mysqli_query($con,"SELECT * FROM users");
$row = mysqli_fetch_assoc($query);
foreach ($query as $row) {
echo"User Details <br>";
echo"<br>Name : ",$row["name"];
echo"<br>Email : ",$row["email"];
echo"<br>";
}
?>

<html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<form action=""  method="POST">
enter the id of user to be deleted : <input type="number" name="input">
<input type="submit" name="sbtBtn" placeholder="name"><br>
</div>
</form>
</body>
</html>

<?php
if(isset($_POST['sbtBtn'])){
$input = $_POST['input'];
$sql = "DELETE FROM users WHERE id=$input";
if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: ";
}}
?>








