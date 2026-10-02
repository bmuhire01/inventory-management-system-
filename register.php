<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOCK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <header>
        <H2>BM INVENTORY MANAGEMENT SYSTEM</H2>
        <img src="images/images (1).jpg" alt="logo">
    </header>
    <form action="#" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="phone">Phone</label>
        <input type="number" name="phone">
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="password">password</label>
        <input type="password" name="passsword">
        <button type="submit" name="register">Register</button>
    </form>
</body>

</html>
<?php
include("connect.php");
if (isset($_POST['register'])) {
    $email = $_POST['email'];
}



?>