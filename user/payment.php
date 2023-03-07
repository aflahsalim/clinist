<?php
include("connection.php");
include("session.php");
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/user/payment.css" />
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
      <h1>Payment Method</h1>
    </div>
    <div class="payment">
    <form action="" method="POST">
      <input type="radio" value="Debit/Credit/ATM Cards" name="payment">
      <label class="font-medium">Pay with Debit/Credit/ATM Cards</label><br><br>
      <input type="radio" value="Net Banking" name="payment">
      <label class="font-medium">Net Banking</label><br><br>
      <input type="radio" value="UPI" name="payment">
      <label class="font-medium">UPI Apps</label><br><br>
      <input type="radio" value="Pay on Vist" name="payment">
      <label class="font-medium">Pay on Visit</label><br><br>
      <input type="submit" value="Pay"name="sbtBtn" placeholder="name"><br>
    </form>
    </div>
    </div>
  </body>
</html>

<?php
if(isset($_POST['sbtBtn'])){
$payment = $_POST['payment'];

$selectquery="SELECT id FROM appointment ORDER BY id DESC LIMIT 1";
$result = $con->query($selectquery);
$row = $result->fetch_assoc();
$id=$row['id'];

  $insQuery = mysqli_query($con, "UPDATE appointment SET payment='$payment' where id='$id'");
if($insQuery){
echo  include header('location: userprofile.php');
}
else {
echo "Error. Please try again";
}
}
?>