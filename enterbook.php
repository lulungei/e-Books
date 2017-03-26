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
<?php
         if(isset($_POST['add'])) {
            
            if(! $db ) {
               die('Could not connect: ' . mysqli_error($db));
            }
            
            $title = mysqli_real_escape_string($db, $_POST['title']);
            $genre = mysqli_real_escape_string($db, $_POST['genre']);
            $author = mysqli_real_escape_string($db, $_POST['author']);
            $year = (int) $_POST['year'];

            $sql = "INSERT INTO books ". "(title, genre, author, 
               year) ". "VALUES('$title','$genre','$author', $year)";
               
            //mysql_select_db("$conn 'ebooks'");
            $retval = mysqli_query( $db, $sql );
            
            if(!$retval ) {
               die('Could not enter data: ' . mysqli_error($db));
            }
            else{
                echo "Entered data successfully\n";
                
                mysqli_close($db);
            }
         }
            
           
            
            
            ?>

<div class="container">
    <h2>Enter New Books</h2>
     <form method = "post" action = "<?php $_PHP_SELF ?>" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="author">author</label>
            <input name="author" type="text"class="form-control" id="author" placeholder="Enter name of author">
        </div>
        <div class="form-group">
            <label class="sr-only" for="title">Title</label>
            <input name="title"type="text" class="form-control" id="title" placeholder="Enter book title">
        </div>
        <div class="form-group">
            <label class="sr-only" for="author">Genre</label>
            <input name="genre" type="text" class="form-control" id="genre" placeholder="Enter genre">
        </div>
        <div class="form-group">
            <label class="sr-only" for="author">Published</label>
            <input name="year" type="number" class="form-control" id="year" placeholder="Enter year of publication">
        </div>
        <button name="add" type="submit" class="btn btn-default" >Enter</button>
    </form>


</body>

</html>