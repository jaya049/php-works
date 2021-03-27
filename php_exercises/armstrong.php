<?php
$n=153;
$x=$n;
$sum=0;
while($n!=0)
{
	$rem=$n%10;
	$sum=$sum+$rem*$rem*$rem;
	$n=$n/10;
	
}
if($x==$sum)
	echo "$x is an armstrong number";
else
	echo "$x is not an armstrong value";
?>