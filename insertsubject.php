<?php
	session_start();
	require_once("connect.php");
	$subjectID = $_REQUEST['txtUsername'];
	$studentpass = $_REQUEST['txtPassword'];
	$studentpasss = $_REQUEST['tells'];

	$studentadd =$_REQUEST['txtName'];

	$strSQL = "INSERT INTO login( `username`, `pass`, `add`,`tel`) VALUES ('$subjectID','$studentpass','$studentadd','$studentpasss')";
	if (mysqli_query($con, $strSQL)) {

		header("location:login.php");
	}
	else
	{
		echo "Failed : ".mysqli_error($con);
	}
	mysqli_close($con);

?>



