<?php
require_once "connect.php";
require_once "require_admin.php";
?>
<!doctype html>
<html>
<head>
    <title>e-Books</title>  
    <style>
         body{
             background-color:rosybrown;
         }
         table, th, td {
                 border: 1px solid black;
        }
    </style>
<head>
<body>
<?php

$sql = "SELECT title, genre, author, year FROM books";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Title</th><th>Genre</th><th>Author</th><th>Year</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["title"]. "</td><td>" . $row["genre"]. "</td><td> " . $row["author"]. "</td><td>" .$row["year"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$db->close();
?>  


</body>

</html>