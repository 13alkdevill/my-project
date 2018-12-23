<html>
<head>

<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
</head>

  <style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("222.jpg");
    min-height: 90%;
}
</style>
<body>
<!-- Navbar (sit on top) -->


<br>
<br>
<br>
<br>



<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "webpro";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "UPDATE login SET 

			username = '".$_POST["txtName"]."' ,
			pass = '".$_POST["txtLast"]."'  
			
			WHERE id = '".$_POST["txtCustomerID"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 header("location: index1.php");
		
	}

	mysqli_close($conn);
?>
</body>
</html>