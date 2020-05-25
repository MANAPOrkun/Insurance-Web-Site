<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;
}
 

if(isset($_POST['login-btn']))
{

	$connection = mysqli_connect('localhost', 'root', '', 'bookhouse');


    $username=stripslashes($_REQUEST['email']);
    $username=mysqli_real_escape_string($connection,$username);

    $password=stripslashes($_REQUEST['pass']);
	$password=mysqli_real_escape_string($connection,$password);

    $query="SELECT * FROM `customer` WHERE email='$username' and password='$password'";
    $result=mysqli_query($connection,$query);
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
		
		session_start();
		$fetched = mysqli_fetch_assoc($result);
		$_SESSION['email']=$username;
		$_SESSION['username']=$fetched["username"];
		$_SESSION['usersurname']=$fetched["usersurname"];
		$_SESSION['avatar']=$fetched["avatar"];
		$_SESSION['phone']=$fetched["phone"];
		$_SESSION['loggedin']=true;
        header("location:profile.php");
    }
    else{
        echo '<script language="javascript">';
		echo 'alert("Email or password is not correct. Please enter again.")';
		echo '</script>';
    
    }
} else{}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #666666;">


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">

				

					<span class="login100-form-title p-b-43">
						Login
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
			

					<div class="container-login100-form-btn">
					<button type= 'submit' name='login-btn' class="login100-form-btn">
							Login
					</button>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">

						<div>
							<a href="register.php" class="txt1">
								Don't have an account? Click to register.
							</a>
						</div>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('images/happy-family-outdoors-4122956.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

</body>
</html>