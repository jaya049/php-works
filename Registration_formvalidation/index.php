<?php
$link=mysqli_connect("localhost","root","","mydb");
if($link===false)
{
	die("error:couldnot connect".mysqli_connect_error());
}
$nameerr=$emailerr=$nameerr2="";
$fname=$email="";
if(isset($_POST['submit'])){
	if(empty($_POST['fname']))
	{
		$nameerr="required name";
		
	}
	else
	{
		$fname=$_POST['fname'];
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
			$nameerr="only letters and spaces allowed";
			
		}
		else{
			echo "name:$fname"."<br>";
		}
		
	}
	//last name
	if(empty($_POST['lname']))
	{
		$nameerr2="required lastname";
		
	}
	else
	{
		$lname=$_POST['lname'];
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
			$nameerr2="only letters and spaces allowed";
			
		}
		else{
			
		}
		
	}
	//email
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
	if($nameerr == "" && $emailerr == "" && $nameerr2 == "") {  
	 $sql="insert into registration(fname,lname,email,password) values('$fname','$lname','$email','$password')";
		if($result=mysqli_query($link,$sql))
			{
				
				header('location:login.php');
				mysqli_free_result($result);
				
			}

		
	}
	
}
/*if(isset($_POST['submit'])) {  
    if($nameerr == "" && $emailerr == "" && $nameerr2 == "") {  
	 
		header('location:insert.php');
	}
	
}*/
mysqli_close($link); 	
?>

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
	span{
		color:red;
	}
</style>

<body>
	<div>
		<form action="#" method="post" id="myForm">
			<h1>REGISTRATION FORM</h1></br>
			<input type="text" placeholder="first name" name="fname">
			<span class="error">* <?php echo $nameerr; ?> </span> </br>
			<input type="text" placeholder="last name" name="lname">
			<span class="error">* <?php echo $nameerr2; ?> </span> </br>
			<input type="text" placeholder="email" name="email">
			<span class="error">* <?php echo $emailerr; ?> </span> </br>
			<input type="password" placeholder="password" name="pass"></br>
			<input type="submit" value="Register" name="submit">
		
		</form>
		<?php
			
		?>
	</div>
	
</body>
</html>