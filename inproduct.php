<?php
	session_start();
	require_once("connect.php");
	$subjectID = $_REQUEST['pro'];
	$studentpass = $_REQUEST['price'];
	$studentpasss = $_REQUEST['des'];
	

	$strSQL = "INSERT INTO product( `Pname`, `Pprice`, `Pdes`) VALUES ('$subjectID','$studentpass','$studentpasss')";
	
	if (mysqli_query($con, $strSQL)) {

		header("location:index1.php");
	}
	else
	{
		echo "Failed : ".mysqli_error($con);
	}
	mysqli_close($con);

?>



