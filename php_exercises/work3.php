<?php
	$a=$_POST["num"];
	$b=$_POST["num1"];
	if($a>0){
	echo "$a is a positive number"."<br>";}
	echo "$a+$b=".($a+$b)."<br>";
	while($b<=50)
	{
		if(($b%5==0)&&($b%3==0)){
		echo "$b"."<br>";}
		$b++;
	}
?>