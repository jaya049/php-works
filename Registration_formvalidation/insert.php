<?php

$link=mysqli_connect("localhost","root","","mydb");
if($link===false)
{
	die("error:couldnot connect".mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$sql="insert into registration(fname,lname,email,password) values('$fname','$lname','$email','$password')";
if($result=mysqli_query($link,$sql))
{
	
	header('location:login.php');
	mysqli_free_result($result);
	
}

mysqli_close($link);

?>