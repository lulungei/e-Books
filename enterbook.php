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
            $dbhost = 'localhost:8000';
            $dbuser = 'root';
            $dbpass = 'rootpassword';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass, "ebooks");
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $title = addslashes ($_POST['title']);
               $genre = addslashes ($_POST['genre']);
               $author = addslashes ($_POST['author']);
               $year = addslashes ($_POST['year']);

            }else {
               $title = $_POST['title'];
               $genre = $_POST['genre'];
                $author = $_POST['author'];
                 $year= $_POST['year'];
            }
         }
            
           
            
            $sql = "INSERT INTO books ". "(title, genre, author, 
               year) ". "VALUES('','','','' NOW())";
               
            mysql_select_db("$con 'ebooks'");
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            else{
            echo "Entered data successfully\n";
            
            mysql_close($conn);
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
            <input type="year" type="text" class="form-control" id="year" placeholder="Enter year of publication">
        </div>
        <button type="submit" class="btn btn-default" >Enter</button>
    </form>


</body>

</html>
