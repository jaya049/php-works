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
	echo "error:coudnot connect".mysqli_connect_error();
}
$sql5="select * from mytable";
if($result=mysqli_query($link,$sql5)){
	if(mysqli_num_rows($result)>0){
		echo "<table>";
		echo "<tr>";
			echo "<th>id</th> 
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
