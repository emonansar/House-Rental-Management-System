<?php
session_start();
include ('process.php');
        error_reporting(0);

   $username=$_POST['uname'];
   $password=$_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);

   

   $result = mysql_query("select * from users where username = '$username' and password='$password' ")
   or die("Failed to query database" .mysql_error());
   $row = mysql_fetch_array($result);
    if ($row['username']== $username && $row['password'] == $password) {  
   	$_SESSION['name']=$_POST['uname'];

   	header("location:home.php");
   } else {
    echo "Failed to login";
   }


   	?>
   <!-- 	  if (!$_POST['submit']) {
                    echo "All fields are required";
                }
   else -->