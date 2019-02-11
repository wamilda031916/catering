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
  <style>
	body{
	background-image: url(images/index.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
  <body>
    <header>
      <a href="#home" class="logo" data-scroll>AJ's CATERING</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item"><a href="insertcustomer.php" data-scroll>Customer</a></li>
          <li class="menu-item"><a href="insertproduct.php" data-scroll>Products</a></li>
          <li class="menu-item"><a href="insertsales.php" data-scroll>Sales Invoice</a></li>
		  <li class="menu-item"><a href="insertsalesitem.php" data-scroll>Sales Items</a></li>
		  <li class="menu-item">
			<div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Admin
				</button>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="customer.php">Customer</a>
				  <a class="dropdown-item" href="product.php">Product</a>
				  <a class="dropdown-item" href="salesinvoice.php">Sales Invoice</a>       
				  <a class="dropdown-item" href="salesitem.php">Sales Items</a>
				  <a class="dropdown-item" href="logout.php">Logout</a>
		  </li>
        </ul>
      </nav>
    </header>
  </body>
 

</html>
