<?php
include('session.php');
include 'connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM clinic ";
$result = $con->query($sql);
echo"
<table>
<thead>
<th>name</th>
<th>location</th>
<th>number</th>
</thead>";

while ($row = $result->fetch_assoc()) {
echo "<tbody>
<tr>
<td>" . $row['name'] . "</td>
<td>" . $row['location'] . "</td>
<td>" . $row['number'] . "</td>
<td> <a href=deleteclinic.php?id=" . $row['id'] ."> Delete </a></td>
</tr>
<tbody>";
}
echo '</table>';
$con->close();
?>