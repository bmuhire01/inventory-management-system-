<?php
include("header.html");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="POST">
        <label for="name">Product name</label>
        <input type="text" name="name"><br>
        <label for="price">Price</label>
        <input type="number" name="price" id="">
        <label for="quantity">QTY</label>
        <input type="number" name="quantity">
        <button type="submit" name="register" class="button">Register product</button>
    </form>
</body>

</html>
<?php
include_once("connect.php");
if (isset($_POST['register'])) {
    $name =  $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO products (name, price, quantity) VALUES ('$name', '$price', '$quantity')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted. <a href='product.php'>Back to list</a>";
    } else {
        die("failed to insert");
    }
}
include("header_bottom.html");
?>