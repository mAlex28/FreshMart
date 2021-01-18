<?php

include 'dbConnection.php'; // Using database connection file here

$id = $_GET['pid']; // get id through query string

$del = mysqli_query($con,"delete from `product` where pid = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:mapout.php"); // redirects to all records page
    ?>

    <script>

    document.cookie = "myJavascriptVar=1"; 
    </script>

    <?php
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>