<html>
<head>
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

  $sql = "SELECT * FROM login";

  $query = mysqli_query($conn,$sql);
?>
<center>
  <br> <br> <br>
  <table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Last Name </div></th>
    <th width="97"> <div align="center">Phone </div></th>
    <th width="59"> <div align="center">Add </div></th>
    <th width="71"> <div align="center">Email </div></th>
    <th width="59"> <div align="center">user </div></th>
    <th width="71"> <div align="center">password </div></th>
  <th width="50"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["username"];?></td>
    <td><?php echo $result["pass"];?></td>
    <td><div align="center"><?php echo $result["add"];?></div></td>
     <td align="right"><?php echo $result["tel"];?></td>
     
  <td align="center"><a href="33.php">Edit</a></td>
  </tr>
<?php
}
?>
</table>

</center>
<?php
mysqli_close($conn);
?>
</body>
</html>