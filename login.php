<?php
session_start();
require('dbconfig.php');
extract($_POST);
if(isset($submit))
{
	$username=$_POST['username'];
	$password=($_POST['password']);
	$que=mysqli_query($conn,"select username and password from admin where username='$username' and password='$password'");
	$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$Username;
				header('location:index.php');
			}
		else
			{
			$err="<font color='white'>Wrong Email or Password !</font>";
			}
	}

?>


<!DOCTYPE html>
<html>

<head>
	<title>LogIn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style type="text/css">
		body {
			background-image: linear-gradient(rgba(195, 188, 219, 0.6), rgba(186, 192, 152, 0.6)), url("images/background.jpg");
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			opacity: 0.9;
			clip-path: circle(100%);
		}

		.form-control {
			border-radius: 20px;
		}

		.btn-success {
			border-radius: 20px;
		}
	</style>

</head>

<body>
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<form method="post" style="float: right;">
						<fieldset>
							<legend class="py-5">Sign In Here</legend>
							<div class="form-group py-1">
								<input type="text" name="username" class="form-control" placeholder="Username"
									autocomplete="off">
							</div>
							<div class="form-group py-1">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group py-1">
								<input type="submit" name="submit" class="btn btn-success" value="Login">
							</div>
							<div class="form-group py-1">
								<input type="Reset" name="submit" class="btn btn-success" value="Reset">
							</div>
							<div class="form-group">
								<label style="padding: 20px;"><?php echo @$err;?></label>
							</div>
						</fieldset>
					</form>

				</div>

			</div>

		</div>

	</section>
</body>

</html>