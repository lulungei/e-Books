<!doctype html>
<html>
<head>
<title>e-Books</title>
<link href="styles.css" rel="stylesheet"/> 

</style>
</head>

<body>


<input type="text" name="search" placeholder="Author or Title or Year of Publication">
<br/>
<br/>
<?php include "include/nav.php" ?>
<br/>
<br/>
<br/>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="images\way-of-shadows.jpg" >
    <div class="text">The Way of The Shadows</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images\nm.jpg" >
    <div class="text">Nelson Mandela</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3/ 4</div>
    <img src="images\ss.jpg" >
    <div class="text">A Stranger in The Mirror</div>
  </div>
   <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images\sydneysheldon.jpg">
    <div class="text">If Tomorrow Comes</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>






<script src="style.js" type="text/javascript"></script>
</body>

</html>
