<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<style type="text/css">
	label{
		color:dark;
		font-weight:bold;
		font-size:20px;
	}
</style>
</head>
<body>
<form action="index.php" method="post">
<div class="container">
	<div class="row justify-content-center mt-5 p-5" id="login">
		<div class="col-md-5">
			<div class="card bg-light text-dark">
				<div class="card-header bg-warning">
					<h1 class="text-center font-weight-bold text-danger text-uppercase">Admin Login</h1>
				</div>
				<div class="card-body bg-info">
					<div class="row">
						<div class="col-md-12">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" required>
						<label>Password:</label>
						<input type="text" name="password" class="form-control" required>
					    </div>
						<div class="col-md-12 text-center mt-3">
							<button class="btn btn-warning font-weight-bold w-25">Login</button>
						</div>
					</div>
				</div>
				<!-- <div class="card-footer text-center">
					<b>New User <a href="reg.php">Register Here</a></b>
				</div> -->
			</div>
		</div>
	</div>
</div>
</form>
</body>











<?php
 if (isset($_POST['username'])) {
	$user = trim($_POST['username']);
	$password = trim($_POST['password']);
	$query = "SELECT * from member WHERE (email='".$user."' OR mobile='".$user."') AND password='".$password."' ";
	$conn = mysqli_connect('localhost','root','','a2z-tb-php');
	$q = mysqli_query($conn,$query);
	$ar = mysqli_fetch_assoc($q);
	if (($user == $ar['mobile'] || $user == $ar['email']) && $password = $ar['password']) {
	// echo $ar['name'];
	session_start();
	$_SESSION['name']=$ar['name'];
	// print_r($_SESSION);
	// echo "Login Success";
	header('location:dashboard.php');
	}
	else 
	{
	echo "Login Failed";
	}
}

?>
