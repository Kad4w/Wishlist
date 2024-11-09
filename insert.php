<?php
$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
$query = mysqli_query($connect, 'SELECT * FROM wish');
$follow = mysqli_query($connect, "INSERT INTO wish (img,names,price) VALUES('{$_GET["img"]}', '{$_GET["names"]}', '{$_GET["price"]}')");
header("Location: https://steams.local/index.php");
?>