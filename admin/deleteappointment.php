<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'connection.php';
    $result = $con->query("delete from appointment where id=$id") or die(mysqli_error($con));
    header('location:viewappointment.php');
} else {
    header('location:viewappointment.php?task=failed');
}
