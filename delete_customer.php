<?php

include "connect.php";

$id = $_GET['customer_id'];

$sql = "DELETE FROM customer WHERE customer_id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: customer.php');
exit;