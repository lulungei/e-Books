<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    header{
	background-color: rosybrown;
	width: 100%;
	height: 200px;
	float: left;
    font-size: 20px;
    text-align:left;
}

nav{
    background-color:rosybrown;
	width: 50%;
	height: 500px;
    float:left;
    font-size: 20px;
    text-align:right;

}
    body{
            background-color:rosybrown;
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
    }

     aside{
	width: 40%;
	height: 400px;
	float: right;
    background-color:rosybrown;
}

p{
    font-size:300%;
    font-family:verdana;



}




</style>
</head>

<body>
<header>
</header>
<div class="container">
<nav>

<p>Welcome Admin</p>
<h2>Choose your actions</h2>           
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="enterbook.php">Enter New Book</a></li>
      <li><a href="#">Edit Book Details</a></li>
      <li><a href="#">Display Users</a></li>
      <li><a href="displaybooks.php">Display Books</a></li>
      <li><a href="#">Delete Book</a></li>
    </ul>
  </div>



</nav>

<aside>
<img src="images/book.jpg" style="width:404px;height:338px;"></img>
</aside>
</div>


</body>


</html>