<?php
$num=1234;
$sum=0;
for($i=0;$i<strlen($num);$i++)
{
	$rem=$num%$i;
	$sum=$sum+$rem;
}
{
	echo $sum;
}
	
?>