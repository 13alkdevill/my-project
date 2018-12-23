<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<header class="w3-container w3-red">
  <?php
session_start();
if (!isset($_SESSION['student_id'])) 
{
  header("location : login.php");
}
require_once("connect.php");
?>
  <h1>CsComShops</h1>

</header>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
  <style>
.cities {
  background-color: white;
  color: white;
  margin: 5px;
  padding: 10px;
} 
</style>

      <h1><a href="#"></a></h1>
    </div>
    <div id="menu">
      <ul>
       <li><a href="index1.php" accesskey="2" title="">HOME</a></li>
        <li><a href="logout.php" accesskey="2" title="">Logout</a></li>
        <li><a href="inserproduct.php" accesskey="2" title="">ADD PRODUCT</a></li>
         <li><a href="ac.php" accesskey="2" title="">MY ACCOUNT</a></li>
        
        <br>
  
        
      </ul>
    </div>
  </div>
  <div id="banner" class="container">
    <div class="title">
      <h2>welcome to store</h2>
      
    </div>
    
  </div>
</div>
<div id="wrapper">
  <div id="three-column" class="cities">
   <tr>
   <tr>
    <center>
        <table border="1" style="width: 300px;">
    <tbody>
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
     
      <tr>
        
        <td>ID</td>
        <td><?php echo $_SESSION['student_id']?></td>
      </tr>
      <tr>
        <td>First Name</td>
        <td><?php echo $_SESSION['first_name']?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo $_SESSION['last_name']?></td>
      </tr>
      <tr>
        <td>Adress</td>
        <td><?php echo $_SESSION['adds']?></td>
      </tr>
       <td>Telephone</td>
        <td><?php echo $_SESSION['tels']?></td>
      </tr>
    </tbody>
  </table>
    </tbody>
</center>
  </table>
  <br>
 
</html>


    </div>
  </div>
</div>
<div id="welcome">
  <div class="container">
    <div class="title">
      
<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>




