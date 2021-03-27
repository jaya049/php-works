<?php
	$name=$_POST["user_name"];
	$pass=$_POST["user_pass"];
	echo "$name"."<br>";
	echo "$pass";
	$mysql=new mysqli("localhost","root","","ddu");
	$query=$mysql->query("insert into ddugky(user_name,user_password) values('$name','$pass')");
	if($query)
	{
		echo "success";
		
	}
	else
	{
		echo "oops!";
	}
?>