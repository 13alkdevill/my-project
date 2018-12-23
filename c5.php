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
   <!DOCTYPE html>
<html>
<head>
  <form name="form1" method="post" action="index1.php">
  
  <title>Product Test</title>
  <meta charset="utf-8">
  <meta name="viewpoint">
  <style>
    #more {display: none;}
    
    body {
      font-family: Verdana,sans-serif;
      margin: 0;
    }
    *{
      box-sizing: border-box;
    }
    .header{
      padding: 50px;
      text-align: center;
      background:Slateblue;
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
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    .menubar a.right{
      float: right;
    }
    .menubar a.hover{
      background-color: #f1f1f1;
      color: black;
    }
    .btn{
      border: none;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer; 
    }
    .buy{background-color: #2196F3;}
    .buy:hover{background: #0b7dda;}
    .row > .column {
      padding: 0 8px;
    }
    .row:after{
      content: "";
      display: table;
      clear: both;
    }
    .column{
      float: left;
      width: 25%;
    }
    .modal{
      display: none;
      position: fixed;
      z-index: 1;
      left:0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }
    .modal-content{
      position: relative;
      background-color: #fefefe;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus{
      text-decoration: none;
      cursor: pointer;
    }
    .mySlides{
      display: none;
    }
    .cursor{
      cursor: pointer;
    }
    .prev,
    .next{
      cursor: :pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: 20px;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0px 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    .next{
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    .prev:hover,
    .next:hover{
      background-color: rgba(0,0,0,0.8);
    }
    .numbertext{
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    img {
      margin-bottom: -4px;
    }
    .caption-container{
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }
    .demo{
      opacity: 0.6;
    }
    .active,
    .demo:hover{
      opacity: 1;
    }
    img.hover-shadow{
      transition: 0.3s;
    }
    .hover-shadow:hover{
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
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
 
  <div class="menubar">
   
  </div>
  <div class="row">
    <div class="main">
    
      <img src="/com55.PNG" width="250" height="150">
      <p></p>
      <h2 style="color: black">ราคา : 5,990 บาท</h2>
   <button class="btn buy" onclick="mFunction()">Buy</button>
       <script>
function mFunction() {
  alert("BUY SUCCESS");
}
</script>
      </a>
    </div>
    <div class="main">
      <h1>AMD-Rendon-R9</h1>
      <p></p>
      <p>Supports 9th / 8th Gen Intel® Core™ / Pentium® Gold / Celeron® processors for LGA 1151 socket
Supports DDR4 Memory, up to 4000+(OC) MHz
MYSTIC LIGHT: 16.8 million colors / 17 effects controlled in one click. MYSTIC LIGHT EXTENSION <span id="dots">...</span><span id="more">VR Ready: Best virtual reality game experience without latency, reduces motion sickness.
Military Class 5, Guard-Pro: Latest evolution with high quality Japanese components for best protection and efficiency.
In-Game Weapons: Game Boost, GAMING Hotkey, X-Boost, WTFast.
EZ Debug LED: Easiest way to troubleshoot.
Click BIOS 5: Award-winning BIOS with high resolution scalable font, favorites and search function.
GAMING CERTIFIED: 24-hour on- and offline game and motherboard testing by eSports players..</span></p>
      <button onclick="myFunction()" id="myBtn">Read more</button>
     
      <script>
        function myFunction(){
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if(dots.style.display === "none"){
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
          }else{
            dots.style.display = "none";
            btnText.innerHTML = "Read more";
            moreText.style.display = "inline";
          }
        }
      </script>
    </div>
  </div>
  <div class="row">
    <div class="column">
      <img src="/g1.jpg" style="width: 100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="/g2.jpg"" style="width: 100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="/g3.jpg"" style="width: 100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="/g4.jpg"" style="width: 100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="pic-com1.jpg" style="width: 100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="pic-com1.jpg" style="width: 100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="pic-com1.jpg" style="width: 100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="pic-com1.jpg" style="width: 100%">
        </div>
        <a class="prev" onclick="plusSlide(-1)">&#10094</a>
        <a class="next" onclick="plusSlide(1)">&#10095</a>
        <div class="caption-container">
          <p id="caption"></p>
        </div>
        <div class="column">
          <img class="demo-cursor" src="pic-com1.jpg" style="width: 100%" onclick="currentSlide(1)" alt="My com2">
        </div>
        <div class="column">
          <img class="demo-cursor" src="pic-com1.jpg" style="width: 100%" onclick="currentSlide(1)" alt="My com3">
        </div>
        <div class="column">
          <img class="demo-cursor" src="pic-com1.jpg" style="width: 100%" onclick="currentSlide(1)" alt="My com4">
        </div>
        <div class="column">
          <img class="demo-cursor" src="pic-com1.jpg" style="width: 100%" onclick="currentSlide(1)" alt="My com5">
        </div>
      </div>
    </div>
    <script>
      function openModal(){
        document.getElementById('myModal').style.display="block";
      }
      function closeModal(){
        document.getElementById('myModal').style.display="none";
      }
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n){
        showSlides(slideIndex += n);
      }
      function currentSlide(n){
        showSlides(slideIndex = n);
      }
      function showSlide(n){
        var i;
        var slides = document.getElementByClassName("mySlides");
        var dots = document.getElementByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slide.length}
        for (i = 0; i < slide.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i dots.length; i++) {
          dots[i].className=dot[i].className.replace(" active","")
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].ClassName += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
    </script>
  </div>
</body>
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




