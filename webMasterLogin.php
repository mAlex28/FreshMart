<html>
    <head>
    <title> Webmaster Login</title>
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
    <div>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="freshmart";
      // Create connection
      $con = mysqli_connect("$servername", "$username","$password", "$dbname");
      // Check connection
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      if(isset($_POST["username"])){
           if(!($_POST["username"]) || !($_POST["password"]))  
           {  
                echo '<script>alert("Both Fields are required")</script>';  
           }  
           else  
           {  
                $username =$_POST["username"];  
                $password =$_POST["password"];  
                // $password = md5($password);  
                $query = "SELECT * FROM freshmart.webmaster WHERE username = '$username' AND password = '$password'";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                    
                     $_SESSION['username'] = "$username";
                     
                    header("Location:createAccount.php");  
                      
                }  
                else  
                {  
                     echo '<script>alert("Wrong User Details")</script>';  
                }  
           }  
          }
      ?>  
    </div>
        <div class="login-box">
            <div id="content-wrap">
            <img src="Images/profile.png" class="profile">
            <h1>Web Master Login </h1>
            <form action="webMasterLogin.php" method="POST" enctype="multipart/form-data">
                <p>Username </p>
                <input type="text" name="username" placeholder="Enter your Username" required="Must">

                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Your Password" required="Must">

                <input type="submit" name="submit" value="Login">
                <a href="#">Forgot Password </a> <br>
            </form>
            </div>
        </div>
    </body>  
</html>