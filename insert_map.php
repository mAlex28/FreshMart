<?php session_start()
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/mapoutstyles.css" rel="stylesheet" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- added styles from home page -->

    <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/jpg" href="images/keellslogo.png" />


</head>


<body style="background:url(images/bg1.jpeg);background-attachment:fixed;">
    <div class="container">
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class=" text-center h2 ">
                    <u>Add Products</u>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="inseert_map_action.php" enctype="multipart/form-data">
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Product Type </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="ptype" name="ptype" placeholder="Your Product Type" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required">
                            <label for="id_name" class="control-label col-md-4  requiredField"> Latitude</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="Latitude" name="Latitude" placeholder="Your Latitude" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required">
                            <label for="id_name" class="control-label col-md-4  requiredField"> Longitude</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="Longitude" name="Longitude" placeholder="Your Longitude" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required">
                            <label for="id_name" class="control-label col-md-4  requiredField"> Sender ID</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="senderid" name="senderid" placeholder="Sender ID" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required">
                            <label for="id_name" class="control-label col-md-4  requiredField"> Price</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="Price" name="Price" placeholder="Sender ID" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Product Desciption<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8  ">
                                <textarea class="form-control" id="Desciption" name="Desciption" placeholder="Your Product Desciption" rows="3"></textarea>
                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Product Image<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8  ">
                                <input type="file" class="form-control-file" id="file" name="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <br />
                                <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2353719.264081807!2d80.9453807650211!3d8.066849753420037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1610504300025!5m2!1sen!2slk" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <br /><br />
    </center>
</body>

</html>