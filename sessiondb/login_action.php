<?php
session_start();
require "dbconnection.php";
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql="select * from tb_login where user='$user' and password='$pass'";
$result=mysqli_query($link,$sql);
foreach($result as $row)
{
	$id=$row['id'];	
}
$_SESSION['loginid']=$id;
header('location:session_id.php');

?>