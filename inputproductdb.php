<?php

include "dbConnection.php";
if($con === false){
	
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

if (isset($_POST['submit'])) {
    // do logic
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];
    $type= $_POST['type'];
    $description= $_POST['description'];
    $datetime= $_POST['datetime'];
    $price= $_POST['price'];
    $image = $_FILES["image"]["name"]; 
    $temp_name = $_FILES["image"]["tmp_name"];
    
    $move=move_uploaded_file($_FILES["image"]["tmp_name"], "Products/". $_FILES["image"]["name"]);	
      
    $sql = "INSERT INTO freshmart.product (latitude,longitude,price,datetime,type,description,image) values ('$latitude','$longitude','$price','$datetime','$type','$description','$image')";

    mysqli_query($con,$sql);
}
?>