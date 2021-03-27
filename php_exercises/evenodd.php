<?php
$a=100;
echo "even numbers within $a are:";
for($i=1;$i<=$a;$i++)
{
	if($i%2==0)
	{
		echo "$i ";
	}
}
echo "<br>"."odd numbers within $a are:";
for($i=1;$i<=$a;$i++)
{
	if($i%2!=0)
	{
		echo "$i ";
	}
}
?>
