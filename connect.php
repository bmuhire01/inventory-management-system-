<?php
$conn = mysqli_connect("localhost", "root", "", "stock");
if ($conn) {
    echo "connected to db";
} else {
    die("refussed to connect to db");
}
