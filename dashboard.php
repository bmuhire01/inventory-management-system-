<?php
include_once("connect.php");


$total_products = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM products"))['total'];


$total_qty = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(quantity) AS total FROM products"))['total'];

$total_value = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(price * quantity) AS total FROM products"))['total'];

$low_stock_result = mysqli_query($conn, "SELECT * FROM products WHERE quantity < 10");

include("header.html");
?>

<div class="cards">
    <div class="card">
        <h3>Total Products</h3>
        <p><?php echo $total_products; ?></p>
    </div>
    <div class="card">
        <h3>Total Quantity</h3>
        <p><?php echo $total_qty; ?></p>
    </div>
    <div class="card">
        <h3>Total Stock Value</h3>
        <p><?php echo number_format($total_value); ?></p>
    </div>
</div>

<h3>Low Stock Products</h3>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    <?php
    if (mysqli_num_rows($low_stock_result) > 0) {
        while ($row = mysqli_fetch_assoc($low_stock_result)) {
            echo "<tr><td>{$row['name']}</td><td>{$row['quantity']}</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>All stock levels are healthy</td></tr>";
    }
    ?>
</table>

<?php include("layout_bottom.html"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css                                                                                                                                                                            ">
</head>

<body>

</body>

</html>