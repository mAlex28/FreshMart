<!DOCTYPE html>
<html>
  <head>
    <title>Insert Report</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdAsovFi7nnvEWf6suQ963q5hW-3MG8pk&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <?php
        include "loginheaderfarmer.php"
    ?>
    <style type="text/css">
        h3 {
            text-align: center;
               padding-top: 90px;
            }

        .map {
            padding-top: 50px;
        }

        #map {
        height: 500px;
        width: 100%;
        }
    </style>
    <script>
    //get current date and time
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;

      function initMap() {
        const myLatlng = { lat: 6.8364, lng: 80.0239 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 16,
          center: myLatlng,
        });
        // Create the initial InfoWindow.
        let infoWindow = new google.maps.InfoWindow({
          content: "Select Location to insert a new report",
          position: myLatlng,
        });
        infoWindow.open(map);
        // Configure the click listener.
        map.addListener("click", (mapsMouseEvent) => {
          // Close the current InfoWindow.
          infoWindow.close();
          // Create a new InfoWindow.
          infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
          });
          infoWindow.setContent(
            '<h4 style="text-align:center"> Insert new report</h4>   <form action = "inputReport.php" method ="POST"> <input type = "text" style="visibility:hidden" name = "latitude" value="'+mapsMouseEvent.latLng.lat()+'" /> <input type = "text" style="visibility:hidden" name = "longitude" value="'+mapsMouseEvent.latLng.lng()+'" /></br> Date: <input type="text" name="datetime" value="'+dateTime+'">   </br> Crop: <input type="text" name="type"></br> Price: <input type="text" name="price"></br> Description: <input type="text" name="description"></br> </br> Image: <input type="file" name="image"/> </br></br>  <button type="submit" name="submit" class="btn btn-outline-success">Submit</button></form>'
          );
          infoWindow.open(map);
        });
      }
    </script>
  </head>
  <body>
  <?php

include "dbConnection.php";

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
    
    $move=move_uploaded_file($temp_name, "/Applications/XAMPP/xamppfiles/htdocs/FreshMart/Products/". $image);	
      
    $sql = "INSERT INTO freshmart.product (latitude,longitude,price,datetime,type,description,image) values ('$latitude','$longitude','$price','$datetime','$type','$description','$image')";

    if($con->query($sql) === true){
        echo "successfull";
    }
    else{
        echo "error";
    }
}
?>
  <div class="container-fluid" style="padding-right: 0px; padding-left:0px; ">
    <h3>Insert new product</h3>
    <div class="map" id="map"></div>
    <div id="login" class="offset">
        
            <div class="col-12 narrow text-center">
                <hr class="clients-hr">
                <a class="btn btn-secondary btn-md" href="editReport.php">Edit Report</a>
                <a class="btn btn-secondary btn-md" href="deleteReport.php">Update Report</a>
            </div> 
    </div>
    <?php 
        include "footer.php"
    ?>
  </body>
</html>
