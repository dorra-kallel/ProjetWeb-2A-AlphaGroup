<?php 

include 'config_t.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM tbl_users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tbl_users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');




		html{
			display: grid;
			height: 100%;
  			width: 100%;
  			place-items: center;
	 		background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);}
	  
  
	

		*{
  			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;}
			.wrapper .button-logo{
			display: inline-block;
			height: 60px;
			width: 60px;
			float: left ;
			margin: 0 5px;
			overflow: hidden;
			background: #fff;
			border-radius: 50px;
			cursor: pointer;
			box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
			transition: all 0.3s ease-out;
			}
			.wrapper .button-logo:hover{
			width: 200px;
			}
			.wrapper .button-logo .icon{
			display: inline-block;
			height: 60px;
			width: 60px;
			text-align: center;
			border-radius: 50px;
			box-sizing: border-box;
			line-height: 60px;
			transition: all 0.3s ease-out;
			}
			.wrapper .button-logo:nth-child(1):hover .icon{
			background: #4267B2;
			}
			.wrapper .button-logo:nth-child(2):hover .icon{
			background: #1DA1F2;
			}
			.wrapper .button-logo:nth-child(3):hover .icon{
			background: #E1306C;
			}



			.wrapper .button-logo:nth-child(4):hover .icon{
			background: #ff0000;
			}
			.wrapper .button-logo .icon i{
			font-size: 25px;
			line-height: 60px;
			transition: all 0.3s ease-out;
			}
			.wrapper .button-logo:hover .icon i{
			color: #fff;
			}
			.wrapper .button-logo span{
			font-size: 20px;
			font-weight: 500;
			line-height: 60px;
			margin-left: 10px;
			transition: all 0.3s ease-out;
			}
			.wrapper .button-logo:nth-child(1) span{
			color: #4267B2;
			}
			.wrapper .button-logo:nth-child(2) span{
			color: #1DA1F2;
			}
			.wrapper .button-logo:nth-child(3) span{
			color: #E1306C;
			}
			.wrapper .button-logo:nth-child(4) span{
			color: #ff0000;
				}
	</style>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
	
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
	<div class="wrapper">
		<a href="http://esprit.tn">
				<div class="button-logo">
					<div class="icon"><i class="fab fa-facebook-f"></i></div>
					<span>Facebook</span>
				</div>
	  	
		  
					<div class="button-logo">
						<div class="icon"><i class="fab fa-twitter"></i></div>
						<span>Twitter</span>
					</div>
					<div class="button-logo">
						<div class="icon"><i class="fab fa-instagram"></i></div>
						<span>Instagram</span>
					</div>
      

					<div class="button-logo">
						<div class="icon"><i class="fab fa-youtube"></i></div>
						<span>YouTube</span>
					</div>
		</a>			
    </div>
</html>