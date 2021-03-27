<?php
$name=$_POST["name"];
$user_name=$_POST["user_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$passwordconf=$_POST["passwordconf"];
$mysql=new mysqli("localhost","root","","mydb");
$query=$mysql->query("insert into mytable(name,user_name,email,password,passwordconf) values('$name',$user_name','$email','$password','$passwordconf')");
//$query=$mysql->query ("INSERT INTO mytable (name,user_name,email,password,passwordconf) VALUES ('$name',$user_name','$email','$password','$passwordconf')");
/*if($query)
{
	echo "success";
}
else{
	echo "oops!";
}*/

?>