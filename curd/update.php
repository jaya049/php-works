<?php
$user_name=$_GET['name'];
$user_password=$_GET['pass'];
$user_status=$_GET['sts'];
$mysql=new mysqli("localhost","root","","ddu");
$query=$mysql->query("update ddugky set user_name='$user_name',user_password='$user_password',user_status='$user_status' where user_id='$user_id'");

?>