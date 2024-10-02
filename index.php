<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Halimbawa Store</h1>
    <h2>Menu</h2>

    <?php include('menu.php'); ?>

    <table border="1">
        <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price ($)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu_item as $product_name => $data) { ?>
                <tr>
                    <td><?= $product_name ?></td>
                    <td><?= $data['description'] ?></td>
                    <td><?= number_format($data['price'], 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Place Order</h2>
    <form action="place_order.php" method="post">
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
        <input type="submit" value="I'll order this">
    </form>
</div>
</body>
</html>
