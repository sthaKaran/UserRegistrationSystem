<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<style type="text/css">
  		table,th,td{
  			border:1px solid black;
  			padding: 5px;
  		}
  	</style>

</head>
<body>
	<?php include 'menu.php';?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/index1.png" alt="user" width="1100" height="500">
      <div class="carousel-caption">
        <h3>UserResister</h3>
        <p>Register New User!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/four.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mountain</h3>
        <p>Nature Beauty!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/images.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: black;">BouddhaStupa</h3>
        <p style="color: black;">Symbol Of Peace!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/about.jpg" class="image-fluid aboutimg">
			</div>

			<div class="col-lg-6 col-md-6 col-12">
			<h3 class="py-2"><b> About user registration system </b> </h3>
			<p class="py-2">Here we can register new user and store their information in the database. It only not concern about the register of the user but also the update and delete of the user information can be done. During register the username and the email of the user must be unique. All the necessary information shown in the form must be filled up in order to complete the process of registration.</p>
			<a href="about.php" class="btn btn-success">Check More</a>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">New Register</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="w-50 m-auto">
				<form action="userinfo.php" method="post">
					<fieldset>
						<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" autocomplete="off" required/>
						</div>
						<div class="form-group">
						<label>Firstname</label>
						<input type="text" name="firstname" class="form-control" autocomplete="off" required/>
						</div>
						<div class="form-group">
						<label>Lastname</label>
						<input type="text" name="lastname" class="form-control" autocomplete="off" required/>
						</div>
						<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" autocomplete="off" required/>
						</div>
						<div class="form-group">
							<label>Gender</label><br>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
						</div>
						<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="mobile" class="form-control" autocomplete="off" required/>
						</div>
						<div class="form-group">
							<label>Date of Birth</label><br>
							<select style="width:100px;float:left" name="yy" class="form-control" required>
          					<option value="">Year</option>
        				  <?php 
          					for($i=1970;$i<=2020;$i++)
          					{
					          echo "<option>".$i."</option>";
					          }         
					          ?>
					          
					          </select>
					          
					          <select style="width:100px;float:left" name="mm" class="form-control" required>
					          <option value="">Month</option>
					          <?php 
					          for($i=1;$i<=12;$i++)
					          {
					          echo "<option>".$i."</option>";
					          }         
					          ?>
					          
					          </select>
					          
					          
					          <select style="width:100px;float:left" name="dd" class="form-control" required>
					          <option value="">Date</option>
					          <?php 
					          for($i=1;$i<=31;$i++)
					          {
					          echo "<option>".$i."</option>";
					          }         
					          ?>
						</div>
						<div class="form-group">
						<input type="submit" value="Register" class="btn btn-success form-control" name="save"/>
						</div>
						<div>
						<input type="reset" value="Reset" class="btn btn-success form-control"/>		
						</div>
						</fieldset>
					
				</form>
				
			</div>
			
		</div>
	</div>

</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">User Details</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="w-50 m-auto">
				<table>
					<tr>
						<th>UserId</th>
						<th>Username</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Mobilenumber</th>
						<th>DateOfBirth</th>
					</tr>
					<?php
					$conn=mysqli_connect("localhost","root");
					mysqli_select_db($conn,'register');
					$sql="Select userid, username,firstname,lastname,email,gender,mobilenumber,dob from newuser";
					$result=$conn->query($sql);

					if($result-> num_rows > 0){
						while($row=$result-> fetch_assoc()){
							echo "<tr><td>".$row["userid"]."</td><td>".$row["username"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["mobilenumber"]."</td><td>".$row["dob"]."</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						echo "0 results";
					}
						$conn-> close();
					?>
				</table>
			</div>
		</div>
	</div>
</section>
	


<footer>
	<p class="text-center p-3 bg-dark text-white">@KaranShrestha</p>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>