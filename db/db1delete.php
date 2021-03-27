<?php
$link=mysqli_connect("localhost","root","","jaya");
if($link===false)
{
	die("error:could not connect".mysqli_connect());
}
$sql9="select * from mytable order by name desc";
if($result=mysqli_query($link,$sql9))
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
$sql9="delete from mytable where name='Ram'";
if(mysqli_query($link,$sql9))
{
	echo "deleted";
}
else
{
	echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>