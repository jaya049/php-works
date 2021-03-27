<?php
$num=1235;
$sum=0;
$num1=$num;
$x=strlen($num);
//for($i=0;$i<=strlen($num);$i++)
while($x!=0)
{
	$rem=$num%10;
	
	$num=$num/10;
	$sum=$sum+$rem;
	$x=$x-1;
}

echo"sum of digits of $num1 is $sum";
	
?>