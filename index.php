<!DOCTYPE html>
<html>
<head>
	<title>bike</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="index.css">
	
</head>
<body>
<header>
  <img src="logo.png" width="20%" height="20%">
   <h2>RIDE AS MUCH OR AS LITTLE OR AS LONG OR AS SHORT BUT AS U RIDE.</h2> 
</header>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="background-color:white;">
 <a href="">Home</a>
 <a href="makepost.php">Publish</a>
 <a href="post.php">Manage Publish</a>
</div>
</div>


<a href="login.php">login</a>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="bike1.jpg" style="width:70%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="bike4.jpg" style="width:70%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="bike5.jpg" style="width:70%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<img src="k.jpg" height="20%" width="20%">
<h2>Harley-Davidson Battle of the Kings 2019 winner announced</h2>
<p>31st Aug 2019 8:00 am
The Battle of the Kings is an international custom Harley build-off between dealers; 12 from Harley India dealers battled it out this year.</p>
</div>
</div>
</body>
</html>