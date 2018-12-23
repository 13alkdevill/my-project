<?php 
	session_start();
	require_once("connect.php");
	$strUsername = mysqli_real_escape_string($con,$_REQUEST['txtUsername']);
	$strPassword = mysqli_real_escape_string($con,$_REQUEST['txtPassword']);

	$strSQL = "SELECT * FROM admin WHERE username = '".$strUsername."'and pass = '".$strPassword."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

	if (!$objResult) {
		
		$_SESSION['error'] = "Username and Password Incorrect!";
		header("location: login1.php");
		
	}else
	{
		$_SESSION['student_id'] = $objResult['id'];
		$_SESSION['first_name'] = $objResult['username'];
		$_SESSION['last_name'] = $objResult['pass'];
		$_SESSION['adds'] = $objResult['add'];
		$_SESSION['tels'] = $objResult['tel'];
		header("location: admin.php");
	}
	session_write_close();
	mysqli_close($con);

 ?>