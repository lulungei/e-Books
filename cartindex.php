<?php 
    session_start(); 
   include_once "connect.php";
    if(isset($_GET['page'])){ 
          
        $pages=array("books", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="books"; 
              
        } 
          
    }else{ 
          
        $_page="books"; 
          
    } 
?>

<!DOCTYPE html>


  
<html> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="cartstyles.css" /> 
      
    <title>Shopping cart</title> 
  
</head> 
  
<body> 
      
    <div id="container"> 
  
        <div id="main"> 
         <?php 
         require($_page.".php"); 
         ?> 
              
        </div>
          
        <div id="sidebar"> 
              
        </div>
  
    </div>

    <h1>Cart</h1> 
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM books WHERE title IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $db.=$id.","; 
        } 
          
        $db=substr($db, 0, -1).") ORDER BY title ASC"; 
        $query=mysql_query($sql); 
        while($row=mysqli_fetch_array($query)){ 
              
        ?> 
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['title']]['quantity'] ?></p> 
        <?php 
              
        } 
    ?> 
        <hr /> 
        <a href="cartindex.php?page=cart">Go to cart</a> 
    <?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } 
  
?>
  
</body> 
</html>