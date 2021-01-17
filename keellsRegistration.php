<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Keells Registration Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
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

			$sql = "INSERT INTO keells (firstname,lastname,branch,email,phonenumber,username,password) VALUES(?,?,?,?,?,?,?)";
			$stmtinsert = $db -> prepare($sql);
			$result = $stmtinsert -> execute([$firstname, $lastname, $branch, $email, $phonenumber, $username, $password]); 

			if($result)
			{
			echo 'Submitted Successfully';
			}
			else
			{
				echo 'Error Occured';
			}
		?>
	</div>
	<div>
		<form action ="keellsRegistration.php" method="post">
			<div class="container">
				<div class="col-sm-6">
					<h4> Registration - Keells Staff</h4>
					<p>Please fill out the information to Register</p>
					<hr class= "mb-3">

					<label for="firstname"><b>First Name </b></label>
					<input class="form-control" type="text" name="First Name" required="Must">

					<label for="lastname"><b>Last Name </b></label>
					<input class="form-control" type="text" name="Last Name" required="Must">

					<label for="branch"><b>Branch </b></label>
					<input class="form-control" type="text" name="Branch" required="Must">

					<label for="email"><b>Email </b></label>
					<input class="form-control" type="email" name="Email" required="Must">

					<label for="phonenumber"><b>Phone Number </b></label>
					<input class=" form-control" type="text" name="Phone Number" required="">

					<hr class= "mb-3">

					<label for="username"><b>Username </b></label>
					<input class="form-control" type="text" name="Username" required="Must">

					<label for="password"><b>Password </b></label>
					<input class="form-control" type="password" name="Password" required="Must">
					
					<input class ="btn btn-primary"type="submit" name="create" value="Register">
				</div>			
			</div>
		</form>
	</div>
</body>
</html>