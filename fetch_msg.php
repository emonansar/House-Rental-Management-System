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

$query = "SELECT * FROM cont";
$result = mysql_query($query);

echo "<table align='center' border='5' bgcolor='teal'>";
echo "<center><h1><font color='blue'><b>Messages for Admin</b></font><h1></center>";
echo "<tr><th style='color:aqua'>First name</th>
<th style='color:aqua'>Last Name</th>
<th style='color:aqua'>Email</th>
<th style='color:aqua'>Mobile</th>
<th style='color:aqua'>Message</th>
<th style='color:aqua'>Operation</th></tr>";
while ($value=mysql_fetch_array($result)) {
	//echo $value ['Name'], " " ;
	//echo $value ['Email'], " ", "<br>";
		echo "<tr><td style='color:white'>";
		echo $value['Name'], "  ";
		echo "</td><td style='color:white'>";
		echo $value['Surname'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Email'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Mobile'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Message'], "  ";
		echo "</td> <td>";
		echo "<a href='deletemsg.php?msg=$value[Message]'><font color='yellow' ><b>DELETE </b></font></a>", " ";
		/*echo "<a href='updatemember.php?Usermail=$value[Email]&ad=$value[Address]&mb=$value[Mobile]&un=$value[Username]'> <font color='yellow' ><b>UPDATE</b></font> </a>";*/
		echo  "</td> </tr>";
}
echo "</table>";

?>
<div class="foot"><a href="admin.php">BACK</a></div>

</html>