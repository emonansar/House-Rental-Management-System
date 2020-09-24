<!DOCTYPE html>

        <?php
        include ('ccreate.php');
        error_reporting(0);
            $UName= $_POST['Namm'];
            $Usermail= $_POST['E_maill'];
            $UContact=$_POST['U_contactt'];
            $upassword= $_POST['U_passs'];
            $uaddress= $_POST['addd'];

                if (!$_POST['submit']) {
                    
                }
                else 
                {
                    $sql = "INSERT into members(Username,Email,Mobile,Password,Address) values ('$UName','$Usermail',' $UContact','$upassword','$uaddress')";
                    if (mysqli_query($connect,$sql)) {
                        echo "Congrats!You are a member of us now.You can SIGN IN.";
                    }
                    else
                    {
                        echo "Something went wrong ,try again later";
                    }
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
    			<a href="index.php"><li>Home</li></a>
    			<a href="about.htm"><li>About</li></a>
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
            <div class="booking-details">
                <h3>Create Account</h3>
                <form action="memcreate.php" method="POST">

                <span class="name" >UserName</span>
                <input type="text" name="Namm" placeholder="Your Name Please" required><br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="E_maill" placeholder="Your E-mail Please" required><br/>

                <span class="name" >Contact</span>
                <input type="text" name="U_contactt" placeholder="Your Contact Number Please" required><br/>

                <span class="name" >Password</span>
                <input type="password" name="U_passs" placeholder="Your Password please" required><br/>


                <span class="name" >Address</span>
                <textarea name="addd" placeholder="Your Address Please" required></textarea> <br/>

                <input type="submit" name="submit" placeholder="SEND">
                <input type="Reset" name="Reset" placeholder="RESET">
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