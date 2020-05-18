<?php
if(isset($_POST['register-btn'])){
	$username = $_POST['username'];
	$usersurname = $_POST['usersurname'];
	$email = $_POST['email'];
	$password = $_POST['password_1'];
	$phone = $_POST['phone'];


    if (!$username && !$password){
        echo "can't submit blank fields";
    }

  
    $connection = mysqli_connect('localhost', 'root', '', 'bookhouse');
 
    $query = "INSERT INTO customer(username, usersurname, email, password, phone) VALUES('$username', '$usersurname','$email', '$password','$phone')";
    $result = mysqli_query($connection, $query);
    if($result){
		$_SESSION['email']=$email;
        header("location:login.php");
      
    }
	else{
		 die("OOPPS! query failed".mysqli_error($connection)); 
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
						Register
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Please enter your name">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Please enter your surname">
						<input class="input100" type="text" name="usersurname">
						<span class="focus-input100"></span>
						<span class="label-input100">Surname</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Please enter a valid email address">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password_1">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Validate password is required">
						<input class="input100" type="password" name="password_2">
						<span class="focus-input100"></span>
						<span class="label-input100">Valide Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone number is required">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone</span>
					</div>

					<div class="container-login100-form-btn">
						<button type= 'submit' name='register-btn' class="login100-form-btn">
							Register
						</button>
                    </div>
                    
                
				
				</form>

				<div class="login100-more" style="background-image: url('images/happy-family-outdoors-4122910.jpg');">
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