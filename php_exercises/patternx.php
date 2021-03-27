<?php
$a=5;
for($i=1;$i<=2*$a;$i++)
{
	for($j=1;$j<=2*$a;$j++)
	{
		if(($i==$j)||(($i+$j)==2*$a))
		{
			echo "* ";
		}
		else
		{
			echo " ";
		}
		
	}
	echo "<br>";
}
		
?>