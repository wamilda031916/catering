<?php

include "connect.php";

$id = $_GET['product_code'];

$sql = "DELETE FROM product WHERE product_code = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: product.php');
exit;
