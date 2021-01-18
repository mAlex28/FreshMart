<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            include('header.php');
        ?>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="fixed.css">
        <style>
            .jumbotron {
    margin-bottom: 0;
    padding: 32px 0 56px;
    border-radius: 0;
}
  
h3.heading {
    padding-top: 20px;
    font-size: 29px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0px;
}

.heading-underline {
    width: 48px;
    height: 3.2px;
    background-color: #009e60;
    margin: 0 auto;
    margin-bottom: 25px;
}
  
.menu {
    overflow: hidden;
}
  
.menu img {
    max-width: 100%;
}
  
.row.no-padding [class*=col-]{
    padding: 0;
}
  
.clients-hr {
    border-top: 2px solid #1ebba3;
}
        </style>
    </head>
    <body>

        <!-- About -->
        <div id="about" class="offset">
            <!-- Jumbotron -->
            <div class="jumbotron container-fluid text-center">
                <div class="col-12 text-center">
                    <h3 class="heading">About</h3>
                    <div class="heading-underline"></div>
                </div>

                <p class="lead text-center">Fresh Mart is a website developed with the assistance of the Department of Agricuture 
                    for the farmers to sell their cultivated crops to keells branches. This was an attempt to 
                    encourage farmers around the country. The crops reported on the site will be bought by the Keells Staff
                    after reviwing them. We work towards to signing more and more farmers to use this website and sell their crops easily. 
                </p>
                <hr class="clients-hr">
                <cite>&#8212; Fresh Mart Developing Team</cite> <br> <br>

                <div class="row no-padding"><!--start row-->
			
                    <div class="col-md-3">
                        <div class="menu">
                            <a href="#"><img src="Images/aboutImg1.jpg"></a>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="menu">
                            <a href="#"><img src="Images/aboutImg2.jpeg"></a>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="menu">
                            <a href="#"><img src="Images/aboutImg3.jpg"></a>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="menu">
                            <a href="#"><img src="Images/aboutImg4.jpeg"></a>
                        </div>
                    </div>   
                </div>
            </div>      
        </div>
        <?php
            include('footer.php');
        ?>
    </body>
</html>
