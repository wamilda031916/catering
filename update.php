<?php

include "connect.php";

$customer_id = $_POST['customer_id'];
$firstname = $_POST['firstname'];
$mi = $_POST['mi'];
$lastname = $_POST['lastname'];
$customer_street = $_POST['customer_street'];
$customer_barangay = $_POST['customer_barangay'];
$city = $_POST['city'];
$contact_num = $_POST['contact_num'];


$sql = "UPDATE customer SET firstname = '$firstname', mi = '$mi', lastname = '$lastname', customer_street = '$customer_street', customer_barangay = '$customer_barangay', city = '$city', contact_num = '$contact_num' WHERE customer_id = '$customer_id' ";
$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: customer.php');
exit;