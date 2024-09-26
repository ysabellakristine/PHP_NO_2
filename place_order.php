<?php
include('menu.php');

$product_name = $_POST['product'];
$quantity = $_POST['quantity'];
$cash = $_POST['cash'];

if (array_key_exists($product_name, $menu_item)) {
    $product_price = $menu_item[$product_name]['price'];
    $product_description = $menu_item[$product_name]['description'];
    $subtotal = $product_price * $quantity;
    echo "<h1>Order Summary</h1>";
    echo "<p>Product: $product_name</p>";
    echo "<p>Description: $product_description</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";

    $total_price = $subtotal; 


    if ($cash >= $total_price) {
        $change = $cash - $total_price;
        echo "<p>Cash provided: $" . number_format($cash, 2) . "</p>";
        echo "<p>Total Price: $" . number_format($total_price, 2) . "</p>";
        echo "<p>Change: $" . number_format($change, 2) . "</p>";

    } else {
        echo "<p>Insufficient cash provided. Please provide enough cash to cover the total price.</p>";
    }
} else {
    echo "<p>Invalid product selection.</p>";
}
?>
