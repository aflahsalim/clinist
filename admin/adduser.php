<?php
include('session.php');
include "connection.php";
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="..//css/admin/adduser.css" />
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
      <h1><a href="adduser.php">Add Users</a>&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="viewuser.php">View & Delete Users</a></h1>
      </div>
      <div class="adduser">
		<head>
		<form action="" method="post">
			            Name <input type="name" name="name" placeholder="Name"/>
                  &emsp;&emsp;&emsp;&emsp;&ensp;Email <input type="email" name="email" placeholder="eamil"/><br><br>
                  Password <input type="password" name="password" placeholder="password"/>
                  &emsp;&emsp;&emsp;&emsp;&ensp;Gender &emsp;&emsp;&ensp;<input type="radio" name="gender" value="m">
                  <label> Male</label>&emsp;
                  <input type="radio" name="gender" value="f">
                  <label> Female</label>
                  <br><br>
                  Dob <input type="date" name="dob">              
                  &emsp;&emsp;&emsp;&emsp;&ensp;Address<input type="text" name="address" placeholder="address"/><br><br>
                  Phone no <input type="number" name="number" placeholder="number"/>
                  &emsp;&emsp;&emsp;&emsp;<input type="submit" name="sbtBtn" placeholder="name"><br>
		</form>
   	</div>
      </div>
  </body>
</html>


<?php
if(isset($_POST['sbtBtn'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$number = $_POST['number'];
$id =$_SESSION['id'];
$insQuery = mysqli_query($con, "INSERT INTO users(name,email,password,dob,address,number) VALUES('$name','$email','$password','$dob','$address','$number')");
if($insQuery){
echo "Insert Successfull ";
}
else {
echo "Error. Please try again";
}
}
?>