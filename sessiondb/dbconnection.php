<?php
$link=mysqli_connect("localhost","root","","session");
if($link===false)
{
	die("error:couldnot connect".mysqli_connect_error());
}

?>