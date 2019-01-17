<?php

require('db.php');
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/product.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>Dashboard</title>
</head>
<style>
	body{
	background-image: url(images/1.jpg);
	background-size: 100% 200%;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>
<marquee behavior=alternate><b><i><h1>AJ's Catering</h1></i></b></marquee>
<div class="header">
<br><center><h1>W-E-L-C-O-M-E <?php echo $_SESSION['username']; ?>!</h1></center>
<br><center><h2>This is our Products</h2></center></br>
</div>
<div class="navbar">
  <a href='active'><a href="dashboard.php?username=<?php echo $_SESSION['username']; ?>">Homes</a>
  <a href="insert.php?username=<?php echo $_SESSION['username']; ?>">New record</a>
  <a href='logout.php'>Logout</a>
</div>
</body>
</html>
