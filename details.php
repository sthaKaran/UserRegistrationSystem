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
<?php  include 'menu.php'; ?>

<div class="jumbotron">
  <h1>User Details</h1>
  <p>Registered users list:)</p>
</div>
<section class="my-5">
  <div class="py-5">
    <h3 class="text-center"><u>User Details</u></h3>
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