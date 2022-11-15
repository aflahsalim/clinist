<html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<h1>Appointment Details</h1>
<form action=""  method="POST">
<div class="">
</div>
</form>
</body>
</html>


<?php
include('session.php');
include 'connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM appointment where clinic=$id";
$result = $con->query($sql);
echo"
<table>
<thead>
<th>Clinic</th>
<th>Patient</th>
<th>Date</th>
<th>Slot</th>
</thead>";

while ($row = $result->fetch_assoc()) {
    $userid= $row['userid'];
    $usersql = "SELECT * FROM users where id='$userid' ";
$userresult = $con->query($usersql);
$name = $userresult->fetch_array()['name'];
echo "<tbody>
<tr>
<td>" . $row['clinic'] . "</td>
<td>" . $name . "</td>
<td>" . $row['date'] . "</td>
<td>" . $row['slot'] . "</td>
</tr>
<tbody>";
}
echo '</table>';
$con->close();
?>