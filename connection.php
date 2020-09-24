<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$db= "login";

$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
//checking connection
if ($conn->connect_error) {
	echo "Connection is failed";
}
else 
{
	echo " ";
}


?>