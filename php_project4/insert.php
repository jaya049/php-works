<?php
require'dbconnect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$sql="insert into project_4(name,email) values('$name','$email')";
if(mysqli_query($link,$sql))
{
	header('location:first_form.php');
}
			
else{
	echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>