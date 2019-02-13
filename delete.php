<?php

include "connect.php";

$customer_id = $_GET['customer_id'];

$sql = "DELETE FROM customer WHERE customer_id = '$customer_id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: customer.php');
exit;