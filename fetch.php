<!DOCTYPE html>
<html>


<style type="text/css">
	td{
		padding: 15px;
	}
	.foot{
         text-align:left;
	}

</style>


<?php

include "..\login\connection1.php";
//echo "Connection successful";

$query = "SELECT * FROM members";
$result = mysql_query($query);

echo "<table align='center' border='5' bgcolor='teal'>";
echo "<center><h1><font color='blue'><b>Admin Lists in Rajshahi</b></font><h1></center>";
echo "<tr><th style='color:aqua'>Username</th><th style='color:aqua'>Email</th><th style='color:aqua'>Mobile</th><th style='color:aqua'>Address</th><th colspan='2' style='color:aqua'>Operation</th></tr>";
while ($value=mysql_fetch_array($result)) {
	//echo $value ['Name'], " " ;
	//echo $value ['Email'], " ", "<br>";
		echo "<tr><td style='color:white'>";
		echo $value['Username'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Email'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Mobile'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Address'], "  ";
		echo "</td> <td>";
		echo "<a href='deletemem.php?Usermail=$value[Email]'><font color='yellow' ><b>DELETE </b></font></a>", "<font color='white' ><b>||</b></font> ";
		echo "<a href='updatemember.php?Usermail=$value[Email]&ad=$value[Address]&mb=$value[Mobile]&un=$value[Username]'> <font color='yellow' ><b>UPDATE</b></font> </a>";
		echo  "</td> </tr>";
}
echo "</table>";

?>
<div class="foot"><a href="admin.php">BACK</a></div>

</html>