<?php
include('session.php');
include "connection.php";
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/admin/addclinic.css" />
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
      <div class="addclinic">
      <head>
		<form action="" method="post">
			            Name <input type="name" name="name" placeholder="Name"/>
                  &emsp;&emsp;&emsp;&emsp;&ensp;Email <input type="email" name="email" placeholder="eamil"/><br><br>
                  Password <input type="password" name="password" placeholder="password"/>
                  &emsp;&emsp;&emsp;&emsp;&ensp;Location <input type="text" name="location" placeholder="location"/><br><br>
                  Phone no <input type="number" name="number" placeholder="number"/><br><br>
                  <input type="submit" name="sbtBtn" placeholder="name"><br>
		</form>
      </head>
   	</div>
      </div>
  </body>
</html>



<?php

if(isset($_POST['sbtBtn'])){

  if($_POST['name']==""){
    echo " name is required <br>";
}
else{
   $fname= filter_var($_POST['name']);
}
// $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$location = $_POST['location];
$number = $_POST['number'];
$id =$_SESSION['id'];
$insQuery = mysqli_query($con, "INSERT INTO clinic(name,email,password,location,number) VALUES('$name','$email','$password','$location','$number')");
if($insQuery){
echo "Insert Successfull";
}
}
else {
echo "Error. Please try again";
}
?>


