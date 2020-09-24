<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$db= "login";

$connect = new mysqli ($dbhost,$dbuser,$dbpass,$db);
//checking connection
if ($connect->connect_error) {
	echo "Connection is failed";
}
else 
{
	echo " ";
}


?>