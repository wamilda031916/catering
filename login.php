<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link  href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['submit'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `admin` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: dashboard.php"); 
         }else{
         	echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
		}
    }else{
?>
<div class="header">
<center><h1>Log In</h1></center>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<center><h4>Not registered yet? </h4><a href='registration.php'>Register Here</a></center>

</div>
<?php } ?>


</body>
</html>
