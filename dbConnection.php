<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="freshmart";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>