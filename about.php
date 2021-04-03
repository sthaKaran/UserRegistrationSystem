<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php include 'menu.php';  ?>

<div class="jumbotron">
  <h1>About Us</h1>
  <p>Please read below:)</p>
</div>
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/about.jpg" class="image-fluid aboutimg">
      </div>

      <div class="col-lg-6 col-md-6 col-12">
      <h3 class="py-2"><b> About user registration system </b> </h3>
      <p class="py-2">Here we can register new user and store their information in the database. It only not concern about the register of the user but also the update and the delete of the user information can be done. During register the username and the email of the user must be unique. All the necessary information shown in the form must be filled up in order to complete the process of registration.</p>
      <p>Click on <b>check more</b> to see the user details!!!</p>
      <a href="details.php" class="btn btn-success">Check More</a>
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