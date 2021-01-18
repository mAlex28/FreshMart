<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        .container {
			padding-top: 60px;
		}

		.btn-secondary {
			border-width: medium;
			border-radius: 0;
			text-transform: uppercase;
			font-size: 15px;
			padding: 9.6px 19px;
			margin: 16px;
			color: white;
			background-color: #009e60;
			border-color: #009e60;
		}

		.btn-secondary:hover {
			background-color: #004225;
			border-color: #004225;
		}
    </style>
    <?php 
        include "header.php"
    ?>
</head>
<body>
    <?php
    
    $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="farmdiary";

  $db = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");

  error_reporting("0");

        if(isset($_POST['create']))
        {
            $nic =$_POST['nic'];
            $firstname =$_POST['firstname'];
            $lastname =$_POST['lastname'];
            $contact =$_POST['contact'];
            $address =$_POST['address'];
            $email =$_POST['email'];
            $password =$_POST['password'];
            $confpass =$_POST['confpassword'];

            
            if($confpass == $password){
                $pass=$password;
            }
              else{
           
               echo '<script>alert("Passwords does not match")</script>';  
              }

              $pass = md5($pass);

            $sql ="INSERT INTO freshmart.farmer (nic, firstname, lastname, contact, address, email, password) 
                VALUES($nic, $firstname, $lastname, $contact, $address, $email, $pass)";
            
            mysqli_query($db,$sql);
            if($sql)
            {
                
                header("Location:main.php");  
            } else
            {
                echo '<script>alert("Error")</script>';
            }
        }
        ?>
	<div>

		<form action ="farmerRegister.php" method="post" enctype="multipart/form-data">
			<div class="container">
					<div class="div2">
					  		<div class="col-md-12">
							<h4> Register</h4>
							<p>Please fill out the information below to Register</p>
                        <hr class= "mb-4">
                        <label for="nic"><b>NIC </b></label>
                    <input class="form-control" type="text" name="nic" placeholder="Enter NIC Number" required="Must">
                    
                    <label for="firstname"><b>First Name </b></label>
                    <input class="form-control" type="text" name="firstname" placeholder="Enter Your First Name" required="Must">

                    <label for="lastname"><b>Last Name </b></label>
                      <input class="form-control" type="text" name="lastname" placeholder="Enter Your Last Name" required="Must">
                      
                      <label for="contact"><b>Contact </b></label>
                    <input class="form-control"type="text" name="contact" placeholder="Enter mobile number" required="Must">

                    <label for="address"><b>Address </b></label>
                    <input class="form-control" type="text" name="address" placeholder="Enter your address" required="Must">

                    <label for="email"><b>E-mail </b></label>
                    <input class="form-control" class="mail" type="email" name="email" placeholder="Enter Your Email"> 

                    <label for="password"><b>Password </b></label>
                    <input class="form-control" type="password" name="password "placeholder="Enter Your Password" required="Must">

                    <label for="confpassword"><b>Confirm Password </b></label>
                    <input class="form-control" type="password" name="confpassword"placeholder="Confirm Your Password"required="Must">
                    <hr class= "mb-2">
                    <p> <b> By creating an account you agree to our </b> <a href="Home.html"> <b>Terms & Privacy.</b></a></p>
                    <div class="signin">
                    <input class ="btn btn-secondary"type="submit" name="create" value="Create Account">
                    </div>			
                    </div>
                   </div>
               </div>
            </div>
		</form>
	</div>
</body>
</html>
