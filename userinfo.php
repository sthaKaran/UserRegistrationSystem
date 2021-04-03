<?php


$conn=mysqli_connect("localhost","root");
mysqli_select_db($conn,'register');


$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mob=$_POST['mobile'];
$year=$_POST['yy'];
$month=$_POST['mm'];
$day=$_POST['dd'];
$dob=$year."-".$month."-".$day;

$sql=mysqli_query($conn,"select * from newuser where username='$username' or email='$email'");

$r=mysqli_num_rows($sql);

if($r==true)
{
	header("location:register.php");
}
else
{

$query="insert into newuser (username,firstname,lastname,email,gender,mobilenumber,dob) values('$username','$firstname','$lastname','$email','$gender','$mob','$dob')";

mysqli_query($conn,$query);

header("location:details.php");

}

?>