<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE product_code = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: index.php');
exit;