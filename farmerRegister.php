<?php 
    include('config.php');
    include('header.php');
?>

<html>
    <head>
        
    </head>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $nic= $_POST['nic'];
                $first_name= $_POST['firstname'];
                $last_name= $_POST['lastname'];
                $gender = $_POST['gender'];
                $address= $_POST['address'];
                $contact= $_POST['contact'];
                $email= $_POST['email'];
                $pass= $_POST['pass'];
                $confpass= $_POST['confpass'];
            }
        ?>

    <div class="login-box" style="height:auto;">

    <div class="container">
        <div class="row">
            <div class="div2">
                    <form action="farmerRegister.php" method="POST" enctype="multipart/form-data">
                    <h1>Register</h1>

                    <input type="text" name="nic" placeholder="Enter nic number">
                    <input type="text" name="firstname" placeholder="Enter Your First Name">
                    <input type="text" name="lastname" placeholder="Enter Your Last Name">
                    <input type="text" name="contact" placeholder="Enter mobile number">
                    <input type="text" name="address" placeholder="Enter your address">
                    <input class="mail" type="email" name="email" placeholder="Enter Your Email"> 
                    <input type="password" name="pwd"placeholder="Enter Your Password">
                    <input type="password" name="pwdcon"placeholder="Confirm Your Password">
            
    
    <button type="submit" name="submit" class="submitbtn">Create Account</button>
</div>
<p>By creating an account you agree to our <a href="Login_Menu.php">Terms & Privacy</a>.</p>
<div class="container signin">

</div>
</div>

        </form>

        
        
        </div>
    </body>
</html>
<?php
    include('footer.php')
?>