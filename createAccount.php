<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            include('header.php');
        ?>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="fixed.css">
        <link rel="stylesheet" href="style.css">
        <style>

            h3 {
                padding-top: 30px;
            }

        </style>
    </head>
    <body>
    
        <div id="login" class="offset">
        
            <div class="col-12 narrow text-center">
            
                <h3>Choose an account to create</h3>
                <hr class="clients-hr">
                <a class="btn btn-secondary btn-md" href="keellsRegistration.php">Register for keells</a> <br>
                <a class="btn btn-secondary btn-md" href="doaRegistration.php">Register for Agriculture Department</a>
            </div> 
            <a class="btn btn-secondary btn-md" href="logout.php">Log out</a>
        </div>
        <?php
            include('footer.php');
        ?>
    </body>
</html>