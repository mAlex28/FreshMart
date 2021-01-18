<?php
	require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DoA Registration Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<?php
            include('header.php');
    ?>
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
</head>
<body>
	<div>
		<?php
		if(isset($_POST['create']))
		{
			$firstname =$_POST['firstname'];
			$lastname =$_POST['lastname'];
			$email =$_POST['email'];
			$phonenumber =$_POST['phonenumber'];
			$username =$_POST['username'];
			$password =$_POST['password'];

			$sql ="INSERT INTO freshmart.doa (firstname, lastname, email, phonenumber, username, password) VALUES (?,?,?,?,?,?)";
			$stmtinsert = $db-> prepare($sql);
			$result = $stmtinsert-> execute([$firstname, $lastname, $email, $phonenumber, $username, $password]); 
			
			if($result)
			{
				echo '<script>Registered successfully</script>';
			} else
			{
				echo '<script>Error occured</script>';
			}
		}
		?>
	</div>
	<div>
		<form action ="doaRegistration.php" method="post">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h4> Registration - Department of Agriculture</h4>
						<p>Please fill out the information to Register</p>
						<hr class= "mb-3">

						<label for="firstname"><b>First Name </b></label>
						<input class="form-control" type="text" name="firstname" required="Must">

						<label for="lastname"><b>Last Name </b></label>
						<input class="form-control" type="text" name="lastname" required="Must">

						<label for="email"><b>Email </b></label>
						<input class="form-control" type="email" name="email" required="Must">

						<label for="phonenumber"><b>Phone Number </b></label>
						<input class="form-control" type="text" name="phonenumber" required="">

						<label for="username"><b>Username </b></label>
						<input class="form-control" type="text" name="username" required="Must">

						<label for="password"><b>Password </b></label>
						<input class="form-control" type="password" name="password" required="Must">
						<hr class= "mb-3">
						
						<input class ="btn btn-secondary" type="submit" name="create" value="Register">
					</div>	
				</div>		
			</div>
		</form>
	</div>
	<?php
            include('footer.php');
        ?>
</body>
</html>