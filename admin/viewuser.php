<?php
include('session.php');
include 'connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM users ";
$result = $con->query($sql);
echo"
<table>
<thead>
<th>user id</th>
<th>name</th>
<th>gender</th>
<th>dob</th>
<th>address</th>
<th>number</th>
</thead>";

while ($row = $result->fetch_assoc()) {
echo "<tbody>
<tr>
<td>" . $row['id'] . "</td>
<td>" . $row['name'] . "</td>
<td>" . $row['gender'] . "</td>
<td>" . $row['dob'] . "</td>
<td>" . $row['address'] . "</td>
<td>" . $row['number'] . "</td>
<td> <a href=deleteuser.php?id=" . $row['id'] ."> Delete </a></td>
</tr>
<tbody>";
}
echo '</table>';
$con->close();
?>