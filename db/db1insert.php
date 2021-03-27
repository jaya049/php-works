<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false)
{
	die("error: could not connect".mysqli_connect_error());
}

$sql2="insert into mytable(id,name,age,email) values(10,'Akhil',20,'jasndbambdmhbh')";
if(mysqli_query($link,$sql2))
{
	echo "Table Inserted";
}
else{
	echo "error $sql1".mysqli_error($link);
}
mysqli_close($link);
?>