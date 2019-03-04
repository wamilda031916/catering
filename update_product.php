<?php

include "connect.php";
session_start();

$id  = $_POST['product_code'];
$description   = $_POST['description'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];


$sql = "UPDATE product SET description = '$description', price = '$price', price = '$price', unit = '$unit' WHERE product_code = $id ";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: product.php');
exit;