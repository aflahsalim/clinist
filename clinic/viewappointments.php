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
$sql = "SELECT * FROM appointment ";
$result = $con->query($sql);
echo"
<table>
<thead>
<th>clinic</th>
<th>date</th>
<th>slot</th>
</thead>";

while ($row = $result->fetch_assoc()) {
echo "<tbody>
<tr>
<td>" . $row['clinic'] . "</td>
<td>" . $row['date'] . "</td>
<td>" . $row['slot'] . "</td>
<td>" . $row['id'] . "</td>
</tr>
<tbody>";
}
echo '</table>';
$con->close();
?>