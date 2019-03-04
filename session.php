<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['userid'];
   
   $ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['userid'])){
      header("location:login.php");
      die();
   }
?>