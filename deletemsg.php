<?php

include "..\login\connection.php";
//echo $_GET['Usermail'];
$umail= $_GET['msg'];
$query= "DELETE FROM cont WHERE Message='$umail' ";
$data= mysqli_query($conn,$query);
if ($data) {
	echo "<font color='Green'>Record Deleted from table";
}
else 
{
	echo "<font color='red'>Sorry!Can't Delete!";
}

?>