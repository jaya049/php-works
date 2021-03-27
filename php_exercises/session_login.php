<!DOCTYPE html>
<html>
<title>

</title>
<style>
	div{
		border:1px solid red;
		padding:10px;
		width:400px;
		text-align:center;
	}
	input{
		padding:10px;
		margin:5px;
	}
</style>

<body>
	<form method="post" id="myForm" action="check.php">
	<div>
		<h1>User Login</h1>
		<input type="email" placeholder="email" name="email1"></br>
		<input type="password" placeholder="password" name="pass1"></br>
		<input type="submit" onclick="myFunction()" value="Login">
	</div>
	</form>
	<script>
		function myFunction() {
			document.getElementById("myForm").submit();
}
	</script>
</body>
</html>