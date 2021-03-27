<DOCTYPE html>
<html>
<style>
	td,th,table{
		border:1px solid;
		border-collapse:collapse;
	}
</style>
<body>

<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false)
{
	die("error:could not connect".mysqli_connect_error());
}
$sql6="select * from mytable limit 1,3";
if($result=mysqli_query($link,$sql6)){
	if(mysqli_num_rows($result)>0)
	{
		echo "<table>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>age</th>
					<th>email</th>
				</tr>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['age']."</td>
					<td>".$row['email']."</td>
				</tr>";
		}
		echo "</table>";
		mysqli_free_result($result); #close result set.
		
	
	}
	else{
		echo "no records found!";
	}
}
else{
		echo "error:could not able to execute $sql6.".mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>