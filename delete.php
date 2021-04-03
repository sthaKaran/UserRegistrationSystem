<?php
				$conn=mysqli_connect("localhost","root");
				mysqli_select_db($conn,'register');
				if(isset($_POST['delete']))
{
				$id=$_POST['id'];

				$query="delete from newuser where userid='$_POST[id]'";

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
  <h1>Delete UserInfo</h1>
  <p>Please give the userid to delete the data:)</p>
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
          		<input type="submit" class="btn btn-success" value="Delete" name="delete">
          	</div>
          </fieldset>
      </form>
  </div>
</div>
</div>
</section><br><br><br><br><br>
	<footer>
	<p class="text-center p-3 bg-dark text-white">@KaranShrestha</p>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>