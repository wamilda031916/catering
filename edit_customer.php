<?php
   include("connect.php");
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<h3><b>Update Customer</b></h3><br>
	    <form action="update_customer.php" method="POST">

		<?php

		include "connect.php";

		$id = $_GET['customer_id'];

		$sql = "SELECT * FROM customer WHERE customer_id = $id " ;
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);

		$firstname = $row['firstname'];
		$mi = $row['mi'];
		$lastname = $row['lastname'];
		$customer_street = $row['customer_street'];
		$customer_barangay = $row['customer_barangay'];
		$city = $row['city'];
		$contact_num = $row['contact_num'];

		        echo '<div>';
		            echo '<h4>Customer ID: <input id="customer_id" type="text" name="customer_id" value="'. $id .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Firstname: <input id="firstname" type="text" name="firstname" value="'. $firstname .'" required></h4>';
		        echo '</div>';
		        echo '</br>';
		        echo '<div>';
		            echo '<h4>Mi: <input id="mi" type="text" name="mi" value="'. $mi .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Lastname: <input id="lastname" type="text" name="lastname" value="'. $lastname  .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Customer Street: <input id="customer_street" type="text" name="customer_street" value="'. $lastname  .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Customer Barangay: <input id="customer_barangay" type="text" name="customer_barangay" value="'. $customer_street  .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>City: <input id="city" type="text" name="city" value="'. $city  .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Contact number: <input id="contact_num" type="number" name="contact_num" value="'. $contact_num  .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
				echo '<div>';
						echo '<input type="hidden" name="id" value="'. $id .'" >';
				echo '</div>';
		?>
	        <button type="submit"><b>Update</b></button>
	    </form>
	</div>
	</center>
</body>
</html>