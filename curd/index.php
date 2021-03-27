<!DOCTYPE html>
<html>
<head>
<style>
	table,th,td{
		border:1px solid;
		border-collapse:collapse;
		padding:10px;
	}
	table{
		margin-left:450px;
	}
</style>
</head>
<body>
	<h1>Table</h1>
	<a href="insert_form.php">Insert User</a>
	<table>
	<thead>
		<tr>
			<th>action</th>
			<th>User id</th>
			<th>User password</th>
			<th>User name</th>
			<th>user status</th>
		
		</tr>
	</thead>
	<tbody>
	<?php
	
	/*$user_name='Athulya';
	$user_password='1353';
	$user_status=2;*/
	$mysql=new mysqli("localhost","root","","ddu");
	$query=$mysql->query("select * from ddugky");
	foreach($query as $value=>$jaya)
		{
		
		echo "<tr>
				<td>
					<a href='updateform.php?id=".$jaya['user_id']."'>edit</a>
					<a href='delete.php?id=".$jaya['user_id']."'>delete</a></td>
				<td>".$jaya['user_id']."</td>
				<td>".$jaya['user_name']."</td>
				<td>".$jaya['user_password']."</td>
				<td>".$jaya['user_status']."</td>
			</tr>";
		
		
		
	}
	?>
	</tbody>
	</table>
</body>
</html>