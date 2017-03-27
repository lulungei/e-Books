<?php

require_once "require_login.php";
require_once "cart.php";

?>
<!doctype html>
<html>
<head>
<title>e-Books</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="styles.css" rel="stylesheet"/> 

</head>
<body>

<?php include "include/header.php" ?>
<?php include "include/nav.php" ?>

<div class="container">
    <h2>Cart</h2>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach(cart_get_all_items() as $item) { ?>
        
        <tr>
            <td><?= $item['data']['title'] ?></td>
            <td><?= $item['data']['author'] ?></td>
            <td><?= $item['quantity']?></td>
            <td><?= cart_get_item_price($item) ?></td>
            <td><a href="remove_from_cart.php?item=<?= urlencode($item['data']['id']) ?>"
                 class="btn btn-default">Remove</a></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3"><b>TOTAL</b></td>
            <td><b><?= cart_get_total_price() ?></b></td>
            <td><a href="remove_from_cart.php?item=all" class="btn btn-default">Empty Cart</a></td>
        </tr>
    </table>

    <form method="post" action="checkouthandler.php">
        <button class="btn btn-lg btn-default">CHECKOUT</button>
    </form>
    
</div>
</body>

</html>