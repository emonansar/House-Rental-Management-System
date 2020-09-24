<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Ansar Uddin Emon"/>
	<meta name="description" content="TO-LET System"/>
	<meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TO-LET MANAGEMENT SYSTEM</title>
</head>
<style type="text/css">
    a{
        text-decoration: none;
        text-align: center;
        padding: 1%;
    }
    h2{
        background-color: teal;
        color:white;
        text-align: center;

    }
    h1{
        background-color: darkblue;
        color:white;

    }
    ul a{
     
        color: darkblue;
        text-decoration: none;
        padding: 1%;


    }
    ul{
         text-align:center;
         list-style-type: none;
         display: block;
    }
    li{
        display: inline;

    }
    ul a:hover{
    background-color: darkblue;
    color: white;
    }
    form{
    width: 50%;
    border: 2px solid darkblue;
    padding: 2%;
    margin: 2% auto;
    }
    .name{
    float: left;
    width: 20%;
    }
    input [type='submit']{
    border: none;
    background-color: darkblue;
    color:white;
    width: 35%;
    padding: 2%;
    margin-left: 20%;
    }
    p{
        background-color: darkblue;
        padding: 2%;
        text-align: center;
        color: white;
    }
    p a{
        color:aqua;
    }

    

</style>

<body bgcolor="silver"><center>
    <h1> TO-LETs RAJSHAHI <br>
	Welcome to Admin Pannel </h1> </center>
	<ul>
		<a href="index.php"><li>Log Out</li></a>
		<a href="fetch_member.php"><li>View Members List</li></a>
        <a href="fetch.php"><li>View Admin List</li></a>
        <a href="fetch_book.php"><li>List of House Booking</li></a>
        <a href="fetch_msg.php"><li>Message for Admin</li></a>

	</ul>

	<h2>Inserting Family House Photos(Less than 2MB) at Homepage with Description</h2>
	<form action=" " method="POST" enctype="multipart/form-data"/>
	
	<span class="name">Image Code</span>
    <input type="text" name="housename" placeholder="Code start with 'F' " value="" required="true" /><br/>
	<span class="name">Description</span> 
    <input type="text" name="description" value="" required="true"/><br/>
	<span class="name">Location</span> 
    <input type="text" name="location" value="" required="true"/><br/>
    <span class="name">Date: </span>
    <input type="text" name="date" value="" required="true"/><br/>
    <span class="name">Contact No.(Owner)</span>
    <input type="text" name="contact" value="" required="true"/><br/>
    <span class="name">Image(.jpg/.png)</span>
	<input type="file" name="uploadfile" value="" required="true"/>
	<input type="submit" name="submit" value="SUBMIT"/>
    <input type="reset" name="reset" value="RESET"/>
     </form>

     <h2>Inserting Bachelor House Photos(Less than 2MB) at Homepage with Description</h2>
    <form action=" " method="POST" enctype="multipart/form-data"/>
    
    <span class="name">Image Code</span>
    <input type="text" name="housename" placeholder="Code start with 'B'" value="" required="true"/><br/>
    <span class="name">Description</span> 
    <input type="text" name="description" value="" required="true"/><br/>
    <span class="name">Location</span> 
    <input type="text" name="location" value="" required="true"/><br/>
    <span class="name">Date: </span>
    <input type="text" name="date" value="" required="true"/><br/>
    <span class="name">Contact No.(Owner)</span>
    <input type="text" name="contact" value="" required="true"/><br/>
    <span class="name">Image(.jpg/.png)</span>
    <input type="file" name="uploadfile" value="" required="true"/>
    <input type="submit" name="upload" value="SUBMIT"/>
    <input type="reset" name="reset" value="RESET"/>
     </form>
  
<?php

//echo $_FILES["uploadfile"];
//print_r($_FILES["uploadfile"]);
//$filename=$_FILES["uploadfile"]["name"];
//$tempname=$_FILES["uploadfile"]["tmp_name"];
//$folder="pictures/".$filename;
//echo "$folder";
//move_uploaded_file($tempname, $folder);
if ($_POST['submit']) {
    			$nm= $_POST['housename'];
    			$dn= $_POST['description'];
    			$lc= $_POST['location'];
                $dt= $_POST['date'];
                $mb=$_POST['contact'];
    			$filename= $_FILES["uploadfile"] ["name"];
    			$tempname= $_FILES["uploadfile"] ["tmp_name"];
    			$folder = "pictures/".$filename;
    			move_uploaded_file($tempname, $folder);
    		
    			if ($nm!="" && $lc!="" && $dn!="" && $filename!="" && $dt!="" && $mb!="")
    			{
    				$query="INSERT INTO display_images VALUES ('$nm','$folder','$dn','$lc','$dt','$mb')";
    				$data=mysqli_query($conn, $query);
    				if($data)
    				{
    					echo "<script> alert('Data inserted into database')</script>";
    				}
    				else{
    					echo "<script> alert('It is already in database.Please try another Code!')</script>";
    				}
    			}
    		}
else if($_POST['upload'])
              {
                $nm= $_POST['housename'];
                $dn= $_POST['description'];
                $lc= $_POST['location'];
                $dt= $_POST['date'];
                $mb=$_POST['contact'];
                $filename= $_FILES["uploadfile"] ["name"];
                $tempname= $_FILES["uploadfile"] ["tmp_name"];
                $folder = "bpictures/".$filename;
                move_uploaded_file($tempname, $folder);
            
                if ($nm!="" && $lc!="" && $dn!="" && $filename!="" && $dt!="" && $mb!="")
                {
                    $query="INSERT INTO bachelor_images VALUES ('$nm','$folder','$dn','$mb','$lc','$dt')";
                    $data=mysqli_query($conn, $query);
                    if($data)
                    {
                        echo "<script> alert('Data inserted into database')</script>";
                    }
                    else{
                        echo "<script> alert('It is already in database.Please try another Code!')</script>";
                    }
                }


              }
?>
<h2>Delete Photos and Others from Homepage</h2>
<center><a href="index_admin.php"><b>See Homepage</b></a></center>
<p>&copy;<a href="#">House rental system.</a>All rights reserved 2018-2019</p>

</body>
</html>