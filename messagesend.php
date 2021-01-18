<?php session_start()
?>
<?php


include 'dbconnect.php'; // Using database connection file here
$senderid=$_SESSION["username1"];
// check if the post method is used to submit the form
$messege2farmer = $_POST["message"];
$receverid = $_POST["receverid"];

// get i through query string
// check if the post method is used to submit the form

 echo $messege2farmer; 

$send = mysqli_query($con,"insert into message(receverid,senderid,message) VALUES ('$receverid','$senderid','$messege2farmer')"); // delete query

if($send)
{
    mysqli_close($con); // Close connection
    header("location:mapout.php"); // redirects to all records page
    ?>


    <?php
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>