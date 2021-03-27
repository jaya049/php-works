<!Doctype html>
</html>
<style>

	div{
		border:1px solid;
		width:400px;
		height:500px;
		text-align:center;
		
	}
	input{
		padding:5px;
		margin:5px;
	}
	th,td,table{
		border:1px solid;
		border-collapse:collapse;
	}
	.error{
		
		color:red;
	}
</style>

<?php
$nameerr=$emailerr="";
$name=$email="";
if(isset($_POST['submit'])){
	if(empty($_POST['name']))
	{
		$nameerr="required name";
		
	}
	else
	{
		$name=$_POST['name'];
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			$nameerr="only letters and spaces allowed";
			
		}
		else{
			echo "name:$name"."<br>";
		}
		
	}
	if(empty($_POST['email'])){
		$emailerr="required email";
	
		
	}
	else{
		$email=$_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailerr="invalid email";
			
		}
		else{
			echo "email:$email";
		}
		
	} 	 	
}
?>
<body>
	
	<form action="#" method="post">
		<div>
			<h6>NAME</h6>
			<input type="text" placeholder="name" name="name" value=<?php echo $name;?> >
			<span class="error">* <?php echo $nameerr; ?> </span> </br>
			<h6>email</h6>
			<input type="text" placeholder="email" name="email" value=<?php echo $email;?>>
			<span class="error">* <?php echo $emailerr; ?> </span> </br>
			<input type="submit" name="submit">
		</div>
	</form>
	
</body>
</html>