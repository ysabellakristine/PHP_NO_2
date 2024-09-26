<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Receipt</h1>
        <p>Thank you for your order!</p>
        
        <h1>Order Details:</h1>
        <?php

        if (isset($_POST['product'], $_POST['quantity'], $_POST['cash'])) {
            $product = $_POST['product'];
            $quantity = $_POST['quantity'];
            $cash = $_POST['cash'];

            include('menu.php');

            if (array_key_exists($product, $menu_item)) {
                $total_cost = $menu_item[$product]['price'] * $quantity;
        ?>
        <p>Product: <?= $menu_item[$product]['name'] ?></p>
        <p>Quantity: <?= $quantity ?></p>
        <p>Total Cost: $<?= number_format($total_cost, 2) ?></p>
        <p>Cash Payment: $<?= number_format($cash, 2) ?></p>
        <p>Change: $<?= number_format($cash - $total_cost, 2) ?></p>
        <?php } else { ?>
        <p>Invalid product selected. Please try again.</p>
        <?php }
        } else { ?>
        
        <p>Oops! Something went wrong. Please try again.</p>
        <?php } ?>
    </div>
</body>
</html>
