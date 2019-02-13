<?php
include "connect.php";

$firstname = $_POST['firstname'];
$mi = $_POST['mi'];
$lastname = $_POST['lastname'];
$customer_street = $_POST['customer_street'];
$customer_barangay = $_POST['customer_barangay'];
$city = $_POST['city'];
$contact_num = $_POST['contact_num'];

$sql = "INSERT INTO customer (customer_id, firstname, mi, lastname,customer_street, customer_barangay, city, contact_num)"
	. "VALUES ('$customer_id', '$firstname', '$mi', '$lastname', '$customer_street', '$customer_barangay', '$city', '$contact_num')";
	
$res = mysqli_query($link, $sql);
if($res) echo "Data saved succesfully.";

mysqli_close($link);
header('location: customer.php');

?>