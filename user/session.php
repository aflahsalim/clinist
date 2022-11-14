<?php
session_start();
if (!isset($_SESSION['id'])) {
      header('location: userlogin.php');
      exit();
}
?>