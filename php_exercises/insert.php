<?php
$link=mysqli_connect("localhost","root","","mydb");
if($link===false)
{
	die("error:couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$email=$_POST['email'];
$sql="insert into mytablexm(name,age,address,email) values('$name',$age,'$address','$email')";
if(mysqli_query($link,$sql))
{
	echo "table inserted";
	header('location:tableview.php');
}
mysqli_close($link);
?>