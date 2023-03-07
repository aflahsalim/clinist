<?php
include('session.php');
include "connection.php";
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="users.css" />
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
            <a href="users.php" class="nav-link">
                <i class="uil uil-user"></i>
                <span class="link">Users</span>
              </a>
            </li>
            <li class="list">
              <a href="clinics.php" class="nav-link">
                <i class="uil uil-clinic-medical"></i>
                <span class="link">Clinics</span>
              </a>
            </li>
            <li class="list">
              <a href="viewappointments.php" class="nav-link">
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
      </div>
  </body>
</html>
