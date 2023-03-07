<?php
include("connection.php");
include("session.php");
$id = $_SESSION["id"];
?>


<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../css/user/profile.css" />
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
          <a href="userprofile.php" class="nav-link">
            <i class="uil uil-user-circle"></i>
            <span class="link">Profile</span>
          </a>
        </li>
        <li class="list">
          <a href="userappointment.php" class="nav-link">
            <i class="uil uil-bell"></i>
            <span class="link">Appointment</span>
          </a>
        </li>
        <!-- <li class="list">
              <a href="" class="nav-link">
                <i class="uil uil-clinic-medical"></i>
                <span class="link">Clinics</span>
              </a>
            </li>
            <li class="list">
              <a href="" class="nav-link">
                <i class="uil uil-prescription-bottle"></i>
                <span class="link">Priscription</span>
              </a>
            </li>
            <li class="list">
              <a href="" class="nav-link">
                <i class="uil uil-history"></i>
                <span class="link">History</span>
              </a>
            </li> -->
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
      <h1>View And Edit Your Profile</h1>
    </div>
    <div class="profile">
      <form action="" method="POST">
      <?php
      $sql = "SELECT * FROM users where id='$id'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      foreach ($result as $row) {
        echo ' 

             <label for="firstname"  class="placeholder">Name</label>
             <input value="' . $row["name"] . '" class="input" type="name" placeholder=" " name="name" />
             &emsp;&emsp;&emsp;&emsp;&ensp;
             
             <label for="date" class="placeholder">E-mail</label>
             <input name="email" class="input" type="email" value="' . $row["email"] . '" placeholder=" " />
             <br><br>
                 
            
             <label for="date" class="placeholder">DOB</label>
             <input name="dob" class="input" type="date" value="' . $row["dob"] . '" placeholder=" " />
             &emsp;&emsp;&emsp;&emsp;&ensp;

             <label for="date" class="placeholder">Gender</label>
             <input name="gender" class="input" type="gender" value="' . $row["gender"] . '" placeholder=" " />
             <br><br> 

             <label for="date" class="placeholder">Address</label>
             <input name="address" class="input" type="text" value="' . $row["address"] . '" placeholder=" " />
             &emsp;&emsp;&emsp;&emsp;&ensp;

             <label for="date" class="placeholder">Number</label>&emsp;
             <input name="number" class="input" type="number" value="' . $row["number"] . '" placeholder=" " />
             <br><br>
             
            ';
      }
      ?>

      <br><input type="submit" name="submit" class="submit" value="Submit">
      </form>
    </div>
  </div>
  </div>
</body>

</html>



<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $query = mysqli_query($con, "update users set name='$name',  email='$email', gender='$gender', dob='$dob', number='$number', address='$address' where id='$id'");
  if ($query) {
    echo "PROFILE UPDATED SUCCESSFULLY";
    header('location:userprofile.php');
  } else {
    echo "<script>alert('ERROR.PLEASE TRY AGAIN')</script>";
  }
}
?>