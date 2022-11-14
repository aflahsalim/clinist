<?php
include('session.php');
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    </head>
  <body>
    <nav>
      <div class="logo">
        <i class="uil uil-bars"></i>
        <img src="../images/logowhite.png" alt="">
      </div>
      <div class="sidebar">
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="viewappointments.php" class="nav-link">
                <i class="uil uil-clinic-medical"></i>
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
    </nav>
</body>
</html>