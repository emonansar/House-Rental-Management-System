<!DOCTYPE html>



        <?php
        include ('connection.php');
        error_reporting(0);
            $UserName= $_POST['fname'];
            $UserSurname= $_POST['sname'];
            $UserEmail= $_POST['umail'];
            $UserContact=$_POST['ucon'];
            $userMessage= $_POST['msg'];

                if (!$_POST['submit']) {
                    echo "All fields are required";
                }
                else 
                {
                    $sql = "INSERT into cont(Name,Surname,Email,Mobile,Message) values ('$UserName','$UserSurname','$UserEmail','$UserContact','$userMessage')";
                    if (mysqli_query($conn,$sql)) {
                        echo "<script> alert ('Thanks for your Message!We will reply you on your Email ASAP.')";
                    }
                    else
                    {
                        echo "<script> alert('Something went wrong ,try again later')";
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
    			<a href="index_asi.php"><li>Home</li></a>
    			<a href="about_asi.htm"><li>About</li></a>
    			<a href="home_new.html"><li>Houses</li></a>
    			<a href="index.php"><li>Sign Out</li></a>
    			<a href="login_asi.php"><li>Admin</li></a>
    		</ul>
    	</div>
    </nav>
    <!-Menu Ends here->

    <!-Main Body starts here->
    <div class="main">
    	<div class="wrapper">
          
            <!-Contact details Entry->
            <div class="booking-details">
                <h3>Contact Us</h3>
                <form action="contact.php" method="POST">

                <span class="name" >UserName</span>
                <input type="text" name="fname" placeholder="Your First Name Please" required > <br/>

                <span class="name" >Surname</span>
                <input type="text" name="sname" placeholder="Your Surname Please" required ><br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="umail" placeholder="Your E-mail Please" required ><br/>

                <span class="name" >Contact</span>
                <input type="text" name="ucon" placeholder="Your Contact Number Please" required ><br/>

                 <span class="name" >Message</span>
                <textarea name="msg" placeholder="Your Message Please" required ></textarea> <br/>

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