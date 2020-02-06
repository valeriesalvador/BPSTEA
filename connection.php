<?php
$hostname="localhost";
$username="root";
$password="";
$database="bpstea";
$con=mysqli_connect($hostname, $username, $password, $database);
if(! $con){
  die('Connection Failed'.mysqli_error());
}
  mysqli_select_db($con , $database);

 ?>
