<?php

/* configuration */
$user = 'root';
$pass = '';
$host = 'localhost';
$db   = 'aj catering';
	
/* connect to mysql server */
$link = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()) {
    echo "Failed to connect to database";
    exit;
}