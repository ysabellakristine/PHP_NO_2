<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Bella's Burger Store</h1>
    <h2>Place Order</h2>
    <form action="place_order.php" method="post">
        <?php include('menu.php'); ?>
        <label for="product">Select Product:</label>
        <select id="product" name="product">
            <?php foreach ($menu_item as $product_name => $data) { ?>
                <option value="<?= $product_name ?>"><?= $product_name ?></option>
            <?php } ?>
        </select><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="0" value="1"><br>
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" step="0.01" min="0"><br>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
