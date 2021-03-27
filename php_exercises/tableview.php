<?php
$link=mysqli_connect("localhost","root","","mydb");
if($link===false)
{
	die("error:couldnot connect".mysqli_connect_error());
}
$sql="select * from mytablexm";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0){
		echo "<table>
				<th>NAME</th>
				<th>AGE</th>
				<th>ADDRESS</th>
				<th>email</th>";
				
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>
					<td>".$row['name']."</td>
					<td>".$row['age']."</td>
					<td>".$row['address']."</td>
					<td>".$row['email']."</td>
					<tr>";
				
		}
		"</table>";
		
		
		
	}
	
}
mysqli_close($link);
?>