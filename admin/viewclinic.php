<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/admin/viewclinic.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    </head>
  <body>
    <nav>
      <div class="logo">
      <img src="../images/logowhite.png">
      </div>
    </nav>
      <div class="sidebar">
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
            <a href="adduser.php" class="nav-link">
                <i class="uil uil-user"></i>
                <span class="link">Users</span>
              </a>
            </li>
            <li class="list">
              <a href="addclinic.php" class="nav-link">
                <i class="uil uil-clinic-medical"></i>
                <span class="link">Clinics</span>
              </a>
            </li>
            <li class="list">
              <a href="viewappointment.php" class="nav-link">
              <i class="uil uil-bell"></i>                
              <span class="link">Appointments</span>
              </a>
            </li>
            <li class="list">
              <a href="logout.php" class="nav-link">
                <i class="uil uil-signout"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main">
      <div class="card">
      <h1><a href="addclinic.php">Add Clinics</a>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <a href="viewclinic.php">View & Delete Clinics</a></h1>
      </div>
      <div class="viewclinic">



<?php
include('session.php');
include 'connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM clinic ";
$result = $con->query($sql);
echo"
<table>
<thead>
<th>clinic id</th>
<th>name</th>
<th>location</th>
<th>number</th>
</thead>";

while ($row = $result->fetch_assoc()) {
echo "<tbody>
<tr>
<td>" . $row['id'] . "</td>
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

      </div>
      </div>
  </body>
</html>