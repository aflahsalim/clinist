<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'connection.php';
    $result = $con->query("delete from clinic where id=$id") or die(mysqli_error($con));
    header('location:viewclinic.php');
} else {
    header('location:viewclinic.php?task=failed');
}
