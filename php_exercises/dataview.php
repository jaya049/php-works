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
$link=mysqli_connect("localhost","root","","mydb");
if($link===false)
{
	echo "error:coudnot connect".mysqli_connect_error();
}
$sql="select * from student";
if($result=mysqli_query($link,$sql)){
	if(mysqli_num_rows($result)>0){
		echo "<table>";
		echo "<tr>";
			echo "<th>roll</th> 
					<th>name</th>
					<th>address</th>
					<th>email</th>
					<th>action</th>
				</tr>";
			
			while($row=mysqli_fetch_array($result)){
				echo "<tr>
						<td>".$row['roll']."</td>
						<td>".$row['name']."</td>
						<td>".$row['address']."</td>
						<td>".$row['email']."</td>
						<td><a href=update.php?id=".$row['id'].">update</a><a href=delete.php?id=".$row['id'].">delete</a></td>
					</tr>";
			}
			"</table>";
			
			mysqli_free_result($result);
    }
	else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
		
mysqli_close($link);

?>
</body>
</html>
