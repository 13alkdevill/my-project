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

  <h1>CsComShops</h1>

</header>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<body>
  <center>
      <style>
body {
  background-image: url("x1.j");
  background-repeat: repeat-x;
}
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
        <li><a href="admin.php" accesskey="2"   size="10" title="">HOME</a></li>
        <li><a href="logout.php" accesskey="2" title="">Logout</a></li>
         <li><a href="show1.php" accesskey="2" title="">AllUsers</a></li>
        
         <li><a href="ac.php" accesskey="2" title="">MY ACCOUNT</a></li>
          <li><a href="p1.php" accesskey="2" title="">PRODUCT</a></li>
           <li><a href="up2.php" accesskey="2" title="">EDIT ACCOUNT</a></li>

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
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Header Test</title>
  <meta charset="utf-8">
  <meta name="viewpoint">
  <style>
    *{
      box-sizing: border-box;
    }
    .header{
      padding: 50px;
      text-align: center;
      background:;
      color: white;
    }
    .h h1{
      font-size: 40px;
    }
    .main {
      -ms-flex: 30%;
      flex: 30%;
      text-align: center;
      background-color: #F1F1F1;
      padding: 20px;
    }
    .main2 {
      -ms-flex: 30%;
      flex: 30%;
      text-align: center;
      background-color:#F1F1F1;
      padding: 20px;
    }
    .row{
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }
    .menubar{
      overflow: hidden;
      background-color: #000000;
    }
    .menubar a{
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    .menubar a.right{
      float: right;
    }
    .menubar a.hover{
     // background-color: #ffffff;
      /*color: black;*/
    }
    @media screen and (max-width: 700px){
      .row{
        flex-direction: column;
      }
    }
    @media screen and (max-width: 400px){
        .menubar a{
        float: none;
        width: 100;
      }
    }
  </style>
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

  $sql = "SELECT * FROM product";

  $query = mysqli_query($conn,$sql);
?>
<center>
  <br> <br> <br>
  <table width="850" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="198"> <div align="center">Name </div></th>
    <th width="100"> <div align="center">Price </div></th>
    <th width="500"> <div align="center">Description </div></th>
     <th width="50"> <div align="center">delete </div></th>
        
   
  
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["Pid"];?></div></td>
    <td><?php echo $result["Pname"];?></td>
    <td><?php echo $result["Pprice"];?></td>
    <td><div align="center" ><?php echo $result["Pdes"];?></div></td>
     <td align="center"><a href="333.php?Pid=<?php echo $result["Pid"];?>">Delete</a></td>
    
    

    
     
  
  </tr>
<?php
}
?>
</table>

</center>
<?php
mysqli_close($conn);
?>
<div id="welcome">
  <div class="container">
    <div class="title">
      
<div id="copyright" class="container">
  
</div>
</body>
</html>




