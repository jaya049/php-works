<?php
$a=["red","blue","green"]; //declaring arrays.
$b=["alappuzha","kottayam","idukki","palakkad"];

array_push($b,1,2,3,4); //to push extra elements in array $b.
print_r($b);
echo"<br>";
array_push($a,"rose");
print_r($a);
echo"<br>";

unset($a); //to delete array $a.
print_r($a);

?>