<?php
	/*$user_id=3;
	$user_name='Athulya';
	$user_password='1353';
	$user_status=2;*/
	$mysql=new mysqli("localhost","root","","ddu");
	//$query=$mysql->query("insert into ddugky(user_id,user_name,user_password,user_status) values('$user_id','$user_name','$user_password','$user_status')");
	$query=$mysql->query("select * from ddugky");
	
	
	//for($i=1;$i<=3;$i++)
	 
		foreach($query as $value=>$row)
		{
		
		echo $row['user_id']." :-".$row['user_password'];
		
	    echo "<br>";
	}
	
	
//to print each element in the database normally
/*	for($i=1;$i<=3;$i++)
	{
		$row=$query->fetch_assoc();
		foreach($row as $value)
		{
		
			echo "$value ";
		}
		echo "<br>";
	}*/
	
	
//to print database as an array
	/*$i=4;
	do{
		$row=$query->fetch_assoc();
		print_r($row);
		echo "<br>";
		
		$i-=1;
	}
	while($i>0)*/
	
	
	/*if($query)
	{
		echo "login success";
	}
	else
	{
		echo "oops!";
	}
	*/
	
	
?>