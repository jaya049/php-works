<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false)
{
	die("error: could not connect".mysqli_connect_error());
}
$sql1="CREATE TABLE mytable(id INT(6) PRIMARY KEY, name VARCHAR(20), age INT(3), email VARCHAR(20))";
if(mysqli_query($link,$sql1))
{
	echo "Table Created";
}
else{
	echo "error $sql1".mysqli_error($link);
}
mysqli_close($link);
?>