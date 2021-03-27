
<?php
//$str = "Hello world. It's a beautiful day.";
//print_r (explode(" ",$str));

//$str = bin2hex("Hello World!");
//echo($str);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?> 