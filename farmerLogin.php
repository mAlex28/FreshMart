<?php
    // Initialize the session
    session_start();
     
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: main.php");
        exit;
    }
     
    // Include config file
    require_once "config.php";
     
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Check if username is empty
        if(empty(trim($_POST["nic"]))){
            $username_err = "Please enter your nic.";
        } else{
            $username = trim($_POST["nic"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT id, nic, password FROM freshmart.farmer WHERE nic = :nic";
            
            if($stmt = $db->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam(":nic", $param_username, PDO::PARAM_STR);
                
                // Set parameters
                $param_username = trim($_POST["nic"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Check if username exists, if yes then verify password
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $id = $row["id"];
                            $username = $row["nic"];
                            $hashed_password = $row["password"];
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["nic"] = $username;                            
                                
                                // Redirect user to welcome page
                                header("location: welcome.php");
                            } else{
                                // Display an error message if password is not valid
                                $password_err = "The password you entered was not valid.";
                            }
                        }
                    } else{
                        // Display an error message if username doesn't exist
                        $username_err = "No account found with that nic.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                unset($stmt);
            }
        }
        
        // Close connection
        unset($db);
    }
?>

<html>
    <head>
    <title> Farmer Login</title>
    <?php
        include('header.php')
    ?>
    <style>
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-image: url(Images/farm.jpeg);
        background-size: cover;
        background-position: center;
        font-family: 'Lato', sans-serif;
    }

    .login-box {
        width: 420px;
        height: 420px;
        background: rgba(0, 0, 0, 1);
        color: white;
        top: 50%;
        left: 50%;
        bottom: 50%;
        transform: translate(-50%,-50%);
        position: relative;
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .profile{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 20px;
    }

    .login-box p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }

    .login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="PASSWORD"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #009e60;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="SUBMIT"]:hover
{
    cursor: pointer;
    background: #004225;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #004225;
}

    </style>
    
    </head>
    <body>
        <div class="login-box">
            <div id="content-wrap">
            <img src="Images/profile.png" class="profile">
            <h1>Farmer Login </h1>
            <form action="farmerLogin.php" method="POST" enctype="multipart/form-data">
                <p>NIC </p>
                <input type="text" name="nic" placeholder="Enter your NIC" required="Must">

                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Your Password" required="Must">

                <input type="submit" name="submit" value="Login">
                
            
                <a href="#">Forgot Password </a> <br>
                <a href="farmerRegister.php">Create an account</a> 
                
            </form>
            </div>
        </div>
    </body>  
</html>