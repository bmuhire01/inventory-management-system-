<?php
include_once("connect.php");
$id = $_GET['del_id'];
$sql = "delete from products where id=$id";
$delete = mysqli_query($conn, $sql);
if ($delete) {
    echo "deleted!";
    header("location:product.php");
} else {
    echo "can't delete this record";
}
