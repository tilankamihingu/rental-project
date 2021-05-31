<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./choose.css">
    <title>choose</title>
</head>
<body>
<h2>Event Planer Admin Area</h2>
<h1>Hello admin, What do you want to do?</h1>
<a href="user_table.php" class="button">I want to access the member <br>account information</a>
<a href="product_table.php" class="button2">I want to access information <br>about Ads</a>
<div class="image">
    <img src="images/admin.jpg">
</div>

</body>
</html>