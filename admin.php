<?php
session_start();

include ('head.php');
include ('nav.php');
?>

<!-- admin start  -->

<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <form action="admin.php" method="post">
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
        </div>
    </div>
</div>

<!-- admin end  -->

<?php
include ('footer.php');
?>










<?php
 if (isset($_POST['username'])) {
	$user = trim($_POST['username']);
	$password = trim($_POST['password']);
	$query = "SELECT * from login WHERE (email='".$user."' OR mobile='".$user."') AND password='".$password."' ";
	$conn = mysqli_connect('localhost','root','','web_project');
	$q = mysqli_query($conn,$query);
	$ar = mysqli_fetch_assoc($q);
	if (($user == $ar['mobile'] || $user == $ar['email']) && $password = $ar['password']) {
	// echo $ar['name'];
	// session_start();
	$_SESSION['name']=$ar['name'];
	// print_r($_SESSION);
	echo "<script>alert('Login Successful');window.location.href='admin/index.php';</script>";
	// header('location:dashboard.php');
	}
	else 
	{
	echo "<script>alert('Invalid Username or Password');window.location.href='admin.php';</script>";
	}
}

?>
