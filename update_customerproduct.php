<?php

include "connect.php";

$id = $_POST['id'];
$sales_number  = $_POST['sales_number'];
$description   = $_POST['description'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];
$date  = $_POST['date'];
$terms  = $_POST['terms'];

$sql = "UPDATE sales invoice SET sales_number = '$sales_number', description = '$description', price = '$price', unit = '$unit', date = '$date', terms = '$terms' WHERE sales_number = $id ";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: create_salesinvoice.php');
exit;