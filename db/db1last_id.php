<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false){
	echo "error:couldnot connect".mysqli_connect_error();
}
$sql4="insert into mytable2(name,age,address) values('athu',28,'j')";
if(mysqli_query($link,$sql4))
{
	echo "Table Inserted";
	$id = mysqli_insert_id($link);
    echo "Records inserted successfully. Last inserted ID is: " . $id;
}
else{
	echo "error $sql4".mysqli_error($link);
}
mysqli_close($link);
?>