<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false){
	die("error:could not connect".mysqli_connect_error());
	
}
$sql3="create table mytable2(id int(6) primary key, name varchar(20), age int(3), address varchar(60))";

if(mysqli_query($link,$sql3))
{
	#echo "Table Created";
	/*$id=mysqli_insert_id($link);
	echo "new record created last id is: ".$id;*/
	
}
else{
	echo "error $sql3".mysqli_error($link);
}
mysqli_close($link);
?>