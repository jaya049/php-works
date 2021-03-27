<!DOCTYPE html>
<html>
<title>

</title>
<style>
	div{
		border:1px solid red;
		padding:10px;
		width:400px;
	}
	input{
		padding:10px;
		margin:5px;
	}
</style>

<body>
	<div>
		<form action="insert.php" method="post" id="myForm">
			<h1>REGISTRATION FORM</h1></br>
			<input type="text" placeholder="first name" name="fname"></br>
			<input type="text" placeholder="last name" name="lname"></br>
			<input type="email" placeholder="email" name="email"></br>
			<input type="password" placeholder="password" name="pass"></br>
			<input type="submit" value="Register" name="submit">
		
		</form>
		<?php
			
		?>
	</div>
	
</body>
</html>