<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
$con = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_errno())
{
echo "<div style='color:#fff;'>not connected</div>";
}
?>