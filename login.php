<?php
 	session_start()
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<header class="w3-container w3-red">
  <h1>CsComShops</h1>

</header>
<head>

	
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	<center>
		  <style>
body {
  background-image: url("/New-Refurbished-Banner.jpg");
  background-repeat: repeat-x;
}
</style>
		<h1>Login</h1>
		<form  method="post" action="check_login.php">
		<table border="0" style="width: 300px">
			<tbody>
				<tr>
					<td> Username</td>
					<td>
						<input type="text" name="txtUsername" value="" placeholder="">
					</td>	
				</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="txtPassword" value="" placeholder=""></td>
			</tr>
			</tbody>
		</table>
		<br>
		<input type="submit" name="Submit" value="Login" style="padding: 5px 20px 5px 20px"<br>
		<br>
		<br>
		<br>
		
		<a href="register.php" style="color: #F7F9F9">REGISTER</a>
	
	</form>
	</form>
	<br>
	 <h3 style="color: red;">
	 	<?php
	 		if(isset($_SESSION['error']))
	 		{
	 			echo $_SESSION['error'];
	 			unset($_SESSION['error']);
	 		}
	 	?>
	 </h3>
	</center>
	

</body>
</html>