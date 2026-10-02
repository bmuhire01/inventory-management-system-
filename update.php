<?php
include("header.html");
include_once("connect.php");
$id = $_GET['up_id'];
$sql = "select * from products where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
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
        <label for="name">Name</label>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <label for="name">Price</label>
        <input type="text" name="price" value="<?php echo $row['price']; ?>">
        <label for="name">quantity</label>
        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
        <button type="submit" name="save">Save</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $up_name = $_POST['name'];
    $up_price = $_POST['price'];
    $up_quantity = $_POST['quantity'];
    $sql = "update products set name='$up_name',price=$up_price,quantity=$up_quantity where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Updated successfully. <a href='product.php'>Back to list</a>";
    }
}



?>