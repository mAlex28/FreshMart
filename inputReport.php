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
            '<h4 style="text-align:center"> Insert new report</h4>   <form action = "inputproductdb.php" method ="POST" enctype="multipart/form-data"> <input type = "text" style="visibility:hidden" name = "latitude" value="'+mapsMouseEvent.latLng.lat()+'" /> <input type = "text" style="visibility:hidden" name = "longitude" value="'+mapsMouseEvent.latLng.lng()+'" /></br> Date: <input type="text" name="datetime" value="'+dateTime+'">   </br> Crop: <input type="text" name="type"></br> Price: <input type="text" name="price"></br> Description: <input type="text" name="description"></br> </br> Image: <input type="file" name="image"/> </br></br>  <button type="submit" name="submit" class="btn btn-outline-success">Submit</button></form>'
          );
          infoWindow.open(map);
        });
      }
    </script>
  </head>
  <body>
  
  <div class="container-fluid" style="padding-right: 0px; padding-left:0px; ">
    <h3>Insert new product</h3>
    <div class="map" id="map"></div>
    <div id="login" class="offset">
        
            <div class="col-12 narrow text-center">
                <hr class="clients-hr">
                <a class="btn btn-secondary btn-md" href="editReport.php">Edit Report</a>
                <a class="btn btn-secondary btn-md" href="deleteReport.php">Delete Report</a>
                <hr class="clients-hr">
            </div> 
    </div>
    <div  style="margin-left: 60%;">
      <div>
        <table class="table table-hover" border="0">
        <thead><b>View Messages</b></thead>
        <tbody>

        </tbody>
        </table>
          
      </div>
      <div>
        <form action="messagesend.php" method="post" >
        <input style="display:none;" type="text" value="<br />
      <b>Notice</b>:  Undefined variable: senderrr in <b>/Applications/XAMPP/xamppfiles/htdocs/FreshMart/messagerecived.php</b> on line <b>41</b><br />
      " name="receverid" />
        <label for="lname">Reply:</label><br>
        <input type="text" id="mess" name="message" value=""><br><br>
        <input class="btn btn-outline-success" type="submit" value="send">
          </form>
          </div>

		</div>

    <?php 
        include "footer.php"
    ?>
  </body>
</html>
