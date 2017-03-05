<!doctype html>
<html>
<head>
<title>e-Books</title>
<link href="styles.css" rel="stylesheet"/> 
<link href="style.js" rel="stylesheet"/>
</head>

<body>
<header>
<div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="#">Logout</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Cart</button>
  <div class="dropdown-content">
    <a href="#">Show contents</a>
    
  </div>
</div>
</header>

<input type="text" name="search" placeholder="Author or Title or Year of Publication">
<br/>
<br/>
<nav>
<div class="dropdown">
  <button class="dropbtn">Home</button>
  </div>
</div>
</br>
</br>
<div class="dropdown">
  <button class="dropbtn">Genre</button>
  <div class="dropdown-content">
    <a href="#">Thriller</a>
    <a href="#">Romance</a>
    <a href="#">Biography</a>
    <a href="#">Drama</a>
    
  </div>
</div>
</br>
</br>
<div class="dropdown">
  <button class="dropbtn">Bestsellers</button>
  <div class="dropdown-content">
    <a href="#">If Tomorrow Comes</a>
    <a href="#">The Way of The Shadows</a>
    <a href="#">A Stranger In The Mirror</a>
    <a href="#">Nelson Mandela</a>
    
  </div>
</div>
</nav>

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="images\way-of-shadows.jpg" style="width:100%">
    <div class="text">The Way of The Shadows</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images\nm.jpg" style="width:100%">
    <div class="text">Nelson Mandela</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3/ 4</div>
    <img src="images\ss.jpg" style="width:100%">
    <div class="text">A Stranger in The Mirror</div>
  </div>
   <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images\sydneysheldon.jpg" style="width:100%">
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







</body>

</html>