<?php
$yr=1300;
if($yr%400==0)
{
	echo "$yr is a leap year";
}
elseif($yr%100==0)
{
	echo "$yr is not a leap year";
}
elseif($yr%4==0)
{
	echo "$yr is a leap year";
}
else
{
	echo "$yr is not a leap year";
}
?>