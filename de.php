<?php
	session_start();
	require_once("connect.php");
	$regid = $_REQUEST['id'];

	$strSQL = "DELETE FROM login WHERE id = '".$_POST["txtCustomerID"]."'";
	if(mysqli_query($con, $strSQL))
	{
		header("location: admin.php");
	}
	else 
	{
		echo "Failed :".mysqli_error($con);
	}

	mysqli_close($con);

?>