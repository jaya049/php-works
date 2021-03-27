<!DOCTYPE html>
<html>
<body>
<form action="" method="get">
	<?php
		$mysql=new mysqli("localhost","root","","ddu");
		$user_id=$_GET['id'];
		$query=$mysql->query("select * from ddugky where user_id=$user_id");
		
		
		/*echo $jaya['user_id']."<br>".$jaya['user_password']."<br>".$jaya['user_name']."<br>".$jaya['user_status'];*/
		$jaya=$query->fetch_assoc();
		/*echo "<input type='hidden' name='id' value=".$jaya['user_id'].">
			Name:<input type='text' name='name' value=".$jaya['user_name']."><br>
			password:<input type='text' name='pass' value=".$jaya['user_password']."><br>
			user status:<input type='text' name='sts' value=".$jaya['user_status']."><br>";*/
			
			
		
	
	?>
	<input type='hidden' name='id' value=".$jaya['user_id'].">
			Name:<input type='text' name='name' value=".$jaya['user_name']."><br>
			password:<input type='text' name='pass' value=".$jaya['user_password']."><br>
			user status:<input type='text' name='sts' value=".$jaya['user_status']."><br>
	<input type="submit">
</form>
</body>
</html>

<?php

//

?>