<?php
	$conn=mysqli_connect("localhost","root");
	mysqli_select_db($conn,"register");
	if(isset($_POST['save'])){
		$id=$_POST['id'];
		$year=$_POST['yy'];
		$month=$_POST['mm'];
		$day=$_POST['dd'];
		$dob=$year."-".$month."-".$day;

		$query="update newuser set username='$_POST[username]',firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',gender='$_POST[gender]',mobilenumber='$_POST[mobile]',dob='$dob' where userid='$_POST[id]'";
		mysqli_query($conn,$query);
		header("location: details.php");
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php include 'menu.php'; ?>
<div class="jumbotron">
  <h1>Update UserInfo</h1>
  <p>Please fill the new info of the user with their userID:)</p>
</div>
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="w-50 m-auto">
        <form method="post">
          <fieldset>
          	<div class="form-group">
          		<input type="text" name="id" class="form-control" placeholder="Enter userID" autocomplete="off" required/>
          	</div>
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
                  </select>
            </div>
            <div class="form-group">
            <input type="submit" value="Update" class="btn btn-success form-control" name="save"/>
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
<footer>
	<p class="text-center p-3 bg-dark text-white">@KaranShrestha</p>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
