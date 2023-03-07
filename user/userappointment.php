<?php
include ("connection.php");
include("session.php");
$sql ='select * from clinic';
$result = mysqli_query($con,$sql);
?>


<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/user/appointment.css" />
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
            <!-- </li>
            <li class="list">
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
      <h1>Appointment Booking</h1><br>
    </div>
    <div class="appointment">
      <head>
      <form action="" method="post">
            Select Clinic : 
            <select class="dropdownclinic" name= "clinic" onchange="getUser(this.value)">
            <?php
            while ($row = $result->fetch_assoc()){
                  $name =$row['name'];
                  $id =$row['id'];
                  

            echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
            </select>
            &emsp;&emsp;&emsp;Date Of Book : 
            <input type="date" name="date"><br><br>        
            Select Time Slot : 
            <select class="dropdownslot" value="select" name="slot">
              <option value="8am to 10am">8am to 10am</option>  
              <option value="10am to 12pm">10am to 12pm</option>  
              <option value="1pm to 3pm">1pm to 3pm</option>  
              <option value="3pm to 5pm">3pm to 5pm</option>
            </select><br><br><br>
            <input type="submit" value="Proceed to Payment"name="sbtBtn" placeholder="name"><br>
      </form>
   </div>
</div>
</div>
</body>
</html>


<?php
if(isset($_POST['sbtBtn'])){
$clinic = $_POST['clinic'];
$userid =$_SESSION['id'];
$date = $_POST['date'];
$slot = $_POST['slot'];
$insQuery = mysqli_query($con, "INSERT INTO appointment (clinic,userid,date,slot) VALUES('$clinic','$userid','$date','$slot')");
if($insQuery){
  include header("location: payment.php");
}
else {
echo "Error. Please try again";
}
}
?>