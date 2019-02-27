<?php

include "connect.php";

$product_code  = $_POST['product_code'];
$description   = $_POST['description'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];


$sql = "INSERT INTO product (product_code, description, price, unit)"
     . "VALUES ('$product_code', '$description', '$price', '$unit')";
/* SQL query execution */
$res = mysqli_query($link, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($link);

/* 
close MySQL connection */
mysqli_close($link);
header('location: index.php');
?>