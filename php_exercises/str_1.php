<?php
$str="hello world..";
$f_name="Tom";
$s_name="C";
$l_name="Raj";
$full_name=$f_name." ".$s_name." ".$l_name;
{
	echo strlen($str);   //string length
	echo"<br>";     	//string new line
	echo str_word_count($str)."<br>"; //word count
	echo strrev($str)."<br>";    //reversal
	echo $full_name;
	
}
?>