<?php  
include "db_con.php";
require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$email=$_POST['email'];
	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php?email=$email");
		die;
	}
}

?>
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `email` = '$email' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['email'] = $fetch['email'];
			header('location:admin.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/log/in.css">
</head>
<?php 
	include('index.php');
?>

<body >
<form method="POST">
	<h1>Login</h1>
			<?php if(count($errors) > 0):?>
				<div class="errors_mes">
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<table>
			<tr>
			<td><input type="text" name="email" placeholder="Email"></td>
			</tr>
			<tr>
			<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
			<td><input type="submit" class="submit" value="Log In"></td>
			</tr>
			<tr>
                    <td><p class="link" >Already have an account? <a href="signup.php">Register here</a></p></td>
            </tr>
		</form>
	</div>

</body>
</html>