<?php
session_start();
if (!isset($_SESSION['id'])) {
      header('location: cliniclogin.php');
      exit();
}
?>