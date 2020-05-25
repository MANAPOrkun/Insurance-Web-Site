<?php
$server="localhost:8080";
$con=mysqli_connect($server,"root","","bookhouse");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL: ". mysqli_connect_error();
}
?>
