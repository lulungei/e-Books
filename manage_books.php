<?php

require_once "connect.php";
require_once "require_admin.php";

?>
<!doctype html>
<html>
<head>
    <title>e-Books</title>  
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-color:rosybrown;
    }
</style>
<body>

<div class="container">
    <h2>Enter New Books</h2>
     <form method = "post" action="book_add_handler.php" class="form-inline" enctype="multipart/form-data">
        <div class="form-group">
            <label class="sr-only" for="author">Author</label>
            <input name="author" type="text"class="form-control" id="author" placeholder="Enter name of author" required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="title">Title</label>
            <input name="title"type="text" class="form-control" id="title" placeholder="Enter book title" required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="genre">Genre</label>
            <select name="genre" class="form-control" id="genre" required>
                <option value="">Select genre</option>
                <option value="Thriller">Thriller</option>
                <option value="Romance">Romance</option>
                <option value="Drama">Drama</option>
                <option value="Biography">Biography</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="year">Published</label>
            <input name="year" type="number" class="form-control" id="year" placeholder="Enter year of publication">
        </div>
        <div class="form-group">
            <label class="sr-only" for="price">Price</label>
            <input name="price" type="number" class="form-control" id="price" placeholder="Enter price" required min=0>
        </div>
        <div class="form-group">
            <label class="sr-only" for="image">Image</label>
            <input name="image" type="file" class="form-control" id="image" placeholder="Select Image">
        </div>
        <button name="add" type="submit" class="btn btn-default" >Enter</button>
    </form>


</body>

</html>