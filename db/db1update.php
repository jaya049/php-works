<!DOCTYPE html>
<html>
<style>
	th,td,table{
		border:1px solid;
		border-collapse:collapse;
	}
</style>
<body>

<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false)
{
	die("error: could not connect".mysqli_connect_error());
	
}
$sql8="select * from mytable order by name desc";
if($result=mysqli_query($link,$sql8))
{
	if(mysqli_num_rows($result)>0)
	{
		echo "<table>
				<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>email</th>
				</tr>
				<tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo
					"<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['age']."</td>
					<td>".$row['email']."</td>
					</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No records found";
		
	}
}
$sql8="update mytable set name='limy' where id=3";
if(mysqli_query($link,$sql8))
{
	echo "records updated";
}
else
{
	echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>