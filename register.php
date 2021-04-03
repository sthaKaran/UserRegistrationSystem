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
<?php include 'menu.php'; ?>
<div class="jumbotron">
  <h1>New User Register</h1>
  <p>Please fill the form for register:)</p>
</div>

<section class="my-5">
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
                  </select>
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

<footer>
  <p class="text-center p-3 bg-dark text-white">@KaranShrestha</p>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>