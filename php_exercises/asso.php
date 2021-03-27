<?php
 $num=array("name"=>"Anu","age"=>30);
 $mult=array([1,2,3],[4,5,6],[7,7,9]);
 $colors=["red","blue","black"];
 print_r($colors);
 echo ($mult[1][1])."</br>"."</br>";
 
 foreach($mult as $arr_index=>$inner_arr)
 {
	foreach($inner_arr as $value)
	{
		echo "$value </br>";
	}
 echo "</br>";
 }
 var_dump($colors);
 
 
 
?>