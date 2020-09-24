<?php
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$db= 'login';

mysql_connect ("$dbhost","$dbuser","$dbpass");
//checking connection
mysql_select_db($db);
?>