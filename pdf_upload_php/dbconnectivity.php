<?php 
$mysql=mysqli_connect("localhost","root","","jaya");
if($mysql==false)
{
	die("error coulnot not".mysqli_connect_error($mysql));
	
}
?>