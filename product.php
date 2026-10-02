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
    <button>Add product</button>
    <table border="1">
        <tr>
            <form action="#" method="GET">
                <input type="search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ' '; ?>">
                <button type="submit">search</button>
            </form>
            <th>no</th>
            <th>product name</th>
            <th>price</th>
            <th>quantity</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        include_once("connect.php");

        if (isset($_GET['search']) && $_GET['search'] != '') {
            $search = $_GET['search'];
            $sql = "SELECT * FROM products where name like'%$search%'";
        } else {
            $sql = "SELECT *FROM products";
        }
        $result = mysqli_query($conn, $sql);
        $no = 1;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['price']}</td>";
                echo "<td>{$row['quantity']}</td>";
        ?>
                <td><a href="update.php?up_id=<?php echo $row['id']; ?>">edit</a></td>
                <td><a href="delete.php?del_id=<?php echo $row['id']; ?>">delete</a></td>
        <?php
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
</body>

</html>
<?php

include("header_bottom.html");



?>