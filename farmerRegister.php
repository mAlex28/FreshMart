<?php 
    include('config.php');
    include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
	<div>

		<form action ="farmerRegister.php" method="post" enctype="multipart/form-data">
			<div class="container">
					<div class="div2">
					  		<div class="col-sm-5">
							<h4> Register</h4>
							<p>Please fill out the information below to Register</p>
						<hr class= "mb-4">
					<input class="form-control" type="text" name="nic" placeholder="Enter NIC Number" required="Must">
                    <input class="form-control" type="text" name="firstname" placeholder="Enter Your First Name" required="Must">
                 	 <input class="form-control" type="text" name="lastname" placeholder="Enter Your Last Name" required="Must">
                    <input class="form-control"type="text" name="contact" placeholder="Enter mobile number" required="Must">
                    <input class="form-control" type="text" name="address" placeholder="Enter your address" required="Must">
                    <input class="form-control" class="mail" type="email" name="email" placeholder="Enter Your Email"> 
                    <input class="form-control" type="password" name="pwd"placeholder="Enter Your Password" required="Must">
                    <input class="form-control" type="password" name="pwdcon"placeholder="Confirm Your Password"required="Must">
                    <hr class= "mb-4">
                    <p> <b> By creating an account you agree to our </b> <a href="Login_Menu.php"> <b>Terms & Privacy.</b></a></p>
                    <div class="container signin">
                    <input class ="btn btn-primary"type="submit" name="create" value="Create Account">
                    </div>			
                    
                    	</div>
                   </div>
               </div>
            </div>
		</form>
	</div>
</body>
</html>
<?php
    include('footer.php')
?>
