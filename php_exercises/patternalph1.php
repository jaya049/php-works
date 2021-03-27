<?php

$a=range('A','Z');
for($i=0;$i<=5;$i++)
{
	$b=0;
	for($j=5;$j>=$i;$j--)
	{		
	echo "$a[$b]";
	$b=$b+1;
	}
	
	echo "<br>";
	
}

?>