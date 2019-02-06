<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href = "css/style.css" />
<style>
	body{
	background-image: url(images3.png);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<?php
	require('db.php');
    if (isset($_REQUEST['customer_id'])){
		$customer_id = stripslashes($_REQUEST['customer_id']);   
		$customer_id = mysqli_real_escape_string($con,$customer_id); 
		$firstname = stripslashes($_REQUEST['firstname']);
		$firstname = mysqli_real_escape_string($con,$firstname);
		$mi = stripslashes($_REQUEST['mi']);
		$mi = mysqli_real_escape_string($con,$mi);
		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);
		$customer_street = stripslashes($_REQUEST['customer_street']);
		$customer_street = mysqli_real_escape_string($con,$customer_street);
		$customer_barangay = stripslashes($_REQUEST['customer_barangay']);
		$customer_barangay = mysqli_real_escape_string($con,$customer_barangay);
		$city = stripslashes($_REQUEST['city']);
		$city = mysqli_real_escape_string($con,$city);
		$contact_num = stripslashes($_REQUEST['contact_num']);
		$contact_num = mysqli_real_escape_string($con,$contact_num);

        $query = "INSERT into `customer` (customer_id, firstname, mi, lastname, customer_street, customer_barangay, city, contact_num ) VALUES ('$customer_id', '$firstname', '$mi', '$lastname', '$customer_street', '$customer_barangay', '$city', '$contact_num')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><center><h1>You are registered successfully.</h></center><br/><center>Click here to <a href='login.php'>Login</a></center></div>";
        }
    }else{
?>
<div class="header">
<center><h1>Customer Table</h1></center>
<form name="registration" action="" method="post">
<input type="text" name="customer_id" placeholder="customer_id" required />
<input type="text" name="firstname" placeholder="firstname" required />
<input type="text" name="mi" placeholder="mi" required />
<input type="text" name="lastname" placeholder="lastname" required />
<input type="text" name="customer_street" placeholder="customer_street" required />
<input type="text" name="customer_barangay" placeholder="customer_barangay" required />
<input type="text" name="city" placeholder="city" required />
<input type="text" name="contact_num" placeholder="contact_num" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
