<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <title>AJ's Catering</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
	<!-- Script -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <div class="col-md-3 col-sm-2"></div>
  <div class="well well-lg col-md-6 col-sm-8" id="box1">
    <h3 id="title1"><b>Update Contact</b></h3><br>
    <form action="update.php" method="POST">

<?php

include "connect.php";

$customer_id = $_GET['customer_id'];

$sql = "SELECT firstname, mi, lastname, customer_street, customer_barangay, city, contact_num FROM customer WHERE customer_id = $customer_id " ;
$res = mysqli_query($link, $sql);
$row = mysqli_fetch_array($res);

$firstname = $row['firstname'];
$mi = $row['mi'];
$lastname = $row['lastname'];
$customer_street = $row['customer_street'];
$customer_barangay = $row['customer_barangay'];
$city = $row['city'];
$contact_num = $row['contact_num'];
        echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>';
            echo '<input id="name" type="text" class="form-control" name="firstname" value="'. $firstname .'" required>';
        echo '</div>';
        echo '<br>';
        echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="mi" type="tel" class="form-control" name="mi" value="'. $mi .'" required>';
        echo '</div>';
        echo '<br>';
		echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="lastname" type="tel" class="form-control" name="lastname" value="'. $lastname .'" required>';
        echo '</div>';
		echo '<br>';
		echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="customer_street" type="tel" class="form-control" name="customer_street" value="'. $customer_street .'" required>';
        echo '</div>';
		echo '<br>';
		echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="customer_barangay" type="tel" class="form-control" name="customer_barangay" value="'. $customer_barangay .'" required>';
        echo '</div>';
		echo '<br>';
		echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="city" type="tel" class="form-control" name="city" value="'. $city .'" required>';
        echo '</div>';
		echo '<br>';
		echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="contact_num" type="tel" class="form-control" name="contact_num" value="'. $contact_num .'" required>';
        echo '</div>';
        echo '<div class="input-group">';
                echo '<input type="hidden" class="form-control" name="customer_id" value="'. $customer_id .'" >';
        echo '</div>';
?>
        <button id="bt1" type="submit" class="btn"><b>Update</b></button>
    </form>

  </div>
</div>

</body>
</html>