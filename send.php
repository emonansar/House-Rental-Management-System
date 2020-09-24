<?php
session_start();
include("connection.php");
$msg=$_POST['msg'];
$name=$_SESSION['name'];


$sql="insert into post(msg,name) values('$msg','$name')";
$result=mysqli_query($conn,$sql);

header("location:home.php");

?>