<!DOCTYPE html>

        <?php
        include ('ccreate.php');
        error_reporting(0);
            $UName= $_POST['Nam'];
            $USurname= $_POST['Sur_Name'];
            $Usermail= $_POST['E_mail'];
            $UContact=$_POST['U_contact'];
            $upassword= $_POST['U_pass'];
            $uaddress= $_POST['add'];

                if (!$_POST['submit']) {
                    echo "All fields are required";
                }
                else 
                {
                    $sql = "INSERT into users (username,password,Surname,Email,Contact_No,Address) values ('$UName','$upassword',
                    '$USurname','$Usermail',' $UContact','$uaddress')";
                    if (mysqli_query($connect,$sql)) {
                        echo "Congrats!You are a member of us now.You can Log IN.";
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
    			<a href="sign.php"><li>Houses</li></a>
    			<a href="header.php"><li>Live Chat</li></a>
    			<a href="login.php"><li>Admin</li></a>
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
                <form action="create.php" method="POST">

                <span class="name" >UserName</span>
                <input type="text" name="Nam" placeholder="Your Name Please" required="true"><br/>

                <span class="name" >Surname</span>
                <input type="text" name="Sur_Name" placeholder="Your Surname Please" required="true"><br/>
                <span class="name" >Password</span>
                <input type="password" name="U_pass" placeholder="Your Password please" required="true"><br/>


                <span class="name" >E-Mail</span>
                <input type="email" name="E_mail" placeholder="Your E-mail Please" required="true"><br/>

                <span class="name" >Contact</span>
                <input type="text" name="U_contact" placeholder="Your Contact Number Please" required="true"><br/>

                

                <span class="name" >Address</span>
                <textarea name="add" placeholder="Your Address Please" required="true"></textarea> <br/>

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