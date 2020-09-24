<!DOCTYPE html>
   <?php

   include ('process.php');
        error_reporting(0);

   $username=$_POST['user'];
   $password=$_POST['pass'];
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);

   

   $result = mysql_query("select * from users where username = '$username' and password='$password' ")
   or die("Failed to query database" .mysql_error());
   $row = mysql_fetch_array($result);
     if (!$_POST['submit']) {
                    echo "All fields are required";
                }
   else if ($row['username']== $username && $row['password'] == $password) {
    header("location:admin.php");
   } else {
    echo "Failed to login";
   }

?>



<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Ansar Uddin Emon"/>
	<meta name="description" content="TO-LET System"/>
	<meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>

	<title>TO-LET MANAGEMENT SYSTEM</title>
	<!-Ading CSS Here->
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	<!-Header starts here->
    <header class="header">
    	<div class="wrapper">
    		<h1>TO-LETs RAJSHAHI</h1>
    	</div>
    </header>
    <!-Header Ends here->

    <!-Menu starts here->
    <nav class="menu">
    	<div class="Link">
    		<ul>
    			<a href="index_asi.php"><li>Home</li></a>
    			<a href="about_asi.htm"><li>About</li></a>
    			<a href="home_new.html"><li>Houses</li></a>
    			<a href="contact.php"><li>Contact</li></a>
    			
    		</ul>
    	</div>
    </nav>
    <!-Menu Ends here->

    <!-Main Body starts here->
    <div class="main">
    	<div class="wrapper">
          
            <!-Contact details Entry->
            <div class="logging-details">
                <h3>Log In</h3>
                
                <form action="login.php" method="POST">

                <span class="name" >Username/E-mail</span>
                <input type="text" id="user" name="user" placeholder="Username/Email Please" required="true"><br/>

                <span class="name" >Password</span>
                <input type="password" id="pass" name="pass" placeholder="Please Fill up Your Password" required="true"><br/>


                <input type="submit" id="btn" name="submit" placeholder="LOGIN">
                <input type="Reset" name="Reset" placeholder="RESET"><br/>
                <!a href="#"Forgot Password?</a<br/->
                
            </form>
            </div>
    	</div>
    </div>
    <!-Main Body ends here->

    <!-Footer starts here->
    <footer class="footer">
    	<div class="wrapper">
    		<p>&copy;<a href="#">House rental system</a>.All rights reserved 2018</p>
    	</div>
    </footer>
    <!-Footer ends here->

</body>
</html>