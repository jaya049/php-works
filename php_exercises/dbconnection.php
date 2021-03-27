<?php
	$link=rmysqli_connect("localhost","root","","ddu");
	if($link===false){
		die("Error:couldnot connect".mysqli_connect_error());
	}
	echo{
		"connect successfully".mysqli_get_host_info($link);
		
	}
?>