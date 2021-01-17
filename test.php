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