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
<th>user id</th>
<th>date</th>
<th>slot</th>
<th>payment</th>
</thead>";

while ($row = $result->fetch_assoc()) {
echo "<tbody>
<tr>
<td>" . $row['clinic'] . "</td>
<td>" . $row['userid'] . "</td>
<td>" . $row['date'] . "</td> 
<td>" . $row['slot'] . "</td>
<td>" . $row['payment'] . "</td>
<td> <a href=deleteappointment.php?id=" . $row['id'] ."> Delete </a></td>
</tr>
<tbody>";
}
echo '</table>';
$con->close();
?>