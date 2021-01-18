<?php
	require_once('config.php');
?>

<html>
	<head>
		<title>Keells Registration Form</title>
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
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$branch = $_POST['branch'];
				$email = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql ="INSERT INTO freshmart.keells (firstname, lastname, branch, email, phonenumber, username, password) VALUES (?,?,?,?,?,?,?)";
				$stmtinsert = $db-> prepare($sql);
				$result =$stmtinsert-> execute([$firstname, $lastname, $branch, $email, $phonenumber, $username, $password]); 
				
				if($result)
				{
					echo '<script>Submitted successfully</script>';
				} else
				{
					echo '<script>Error occured</script>';
				}
			}
			?>
		</div>
		<form action ="keellsRegistration.php" method="post">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-5">
							<h4> Registration - Keells Staff</h4>
							<p>Please fill out the information below to Register</p>
							<hr class= "mb-3">

							<label for="firstname"><b>First Name </b></label>
							<input class="form-control" type="text" id="firstname" name="firstname" required="Must">

							<label for="lastname"><b>Last Name </b></label>
							<input class="form-control" type="text" id="lastname" name="lastname" required="Must">

							<label for="branch"><b>Branch </b></label>
							<input class="form-control" type="text" id="branch" name="branch" required="Must">

							<label for="email"><b>Email </b></label>
							<input class="form-control" type="email" id="email" name="email" required="Must">

							<label for="phonenumber"><b>Phone Number </b></label>
							<input class="form-control" type="text" id="phonenumber" name="phonenumber" required="">

							<label for="username"><b>Username </b></label>
							<input class="form-control" type="text" id="username" name="username" required="Must">

							<label for="password"><b>Password </b></label>
							<input class="form-control" type="password" id="password" name="password" required="Must">
							<hr class= "mb-3">

							<input class ="btn btn-secondary" type="submit" id="register" name="create" value="Register">
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