<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="fresh_mart";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }

?>