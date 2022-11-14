<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'connection.php';
    $result = $con->query("delete from users where id=$id") or die(mysqli_error($con));
    header('location:viewuser.php');
} else {
    header('location:viewuser.php?task=failed');
}
