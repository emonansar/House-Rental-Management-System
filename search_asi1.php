<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Ansar Uddin Emon"/>
    <meta name="description" content="TO-LET System"/>
    <meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TO-LET MANAGEMENT SYSTEM</title>
    <!-Ading CSS Here->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-Resource File for Slider->
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="Slider/engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->

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
                <a href="index.php"><li>Sign Out</li></a>
                <a href="login_asi.php"><li>Admin</li></a>
            </ul>
        </div>
    </nav>
    <div class="main">
        <div class="animation">
        <marquee>We are now in <span style="color:blue;font-weight:bold">RAJSHAHI. </span>
        Contact with us.Mobile:<span style="color:blue;font-weight:bold">+8801521325943. </span> 
        Email: <span style="color:blue;font-weight:bold">aansaremon@gmail.com. </span>
        Please sign in to chat with us.We are always here to reach you!</marquee>
    </div>
        <div class="wrapper">

<!-Searching process here->
<h3>Family Houses</h3>
 <?php
                       mysql_connect("localhost", "root", "");
                        mysql_select_db("login");
                       $res=mysql_query("select * from display_images");
                       echo "<center>";
                      echo "<table  align='center' border='1'  bgcolor='silver' bordercolor='gray'>";
                     echo "<tr ><th style='color:blue'>Image</th><th style='color:blue'>Image Code</th><th style='color:blue'>Time</th><th style='color:blue'>Location</th><th style='color:blue'>Book here</th></tr>";
                       while ($row=mysql_fetch_array($res)) {
    
                
                echo"<tr>";
                echo "<td bgcolor='teal'>";
                ?>
                <img src="<?php echo $row["images"]; ?>" height="300" width="500"/><?php echo "</td>";
                echo "<td bgcolor='teal' style='color:white'> "; ?> <span class="house-title"><?php  echo $row["Name"] ?></span><br/><?php echo "</td>";
                echo "<td bgcolor='silver' style='color:white'>"; ?> <span class="house-added">Added Date: <?php echo $row["time"] ?></span><?php echo "</td>";
                echo "<td bgcolor='aqua' style='color:white'>"; ?> <span class="house-Location"><?php echo $row["location"] ?></span><br/><?php echo "</td>";
                echo "<td>"; ?> <a href="sign.php" ><button style="background-color: purple;color: white;" type="button" class="btn-book">Book House</button> </a>
            
        <?php echo "</td>";
               echo"</tr>";
                                                 }        
                        echo "</table>";
                        echo "</center>";
                       ?>



<h3>Search Results</h3>
            <!-Displaying Bachelor Houses in->
            <div class="clearfix">
            <?php
include 'connection.php';
if (isset($_POST['submit-search'])) {
    $search= mysqli_real_escape_string($conn,$_POST['search']);
    $sql= "SELECT * FROM bachelor_images WHERE location LIKE '%$search%' ";
    $result= mysqli_query($conn,$sql);
    $queryResult= mysqli_num_rows($result);
    echo "<table>";
    if ($queryResult>0) {
                while ($row=mysqli_fetch_assoc($result)) {      
                echo"<tr>";
                echo "<td>";
                ?>
                <img src="<?php echo $row["images"]; ?>" height="300" width="500"/><?php echo "</td>";
                echo "<td>"; ?> <span class="house-title"><?php echo $row["code"] ?></span><br/><?php echo "</td>";
                echo "<td>"; ?> <span class="house-added">Added Date: 01-01-18</span><br/><?php echo "</td>";
                echo "<td>"; ?> <span class="house-Location"><?php echo $row["location"] ?></span><br/><?php echo "</td>";
                echo "<td>"; ?> <a href="sign.php" ><button type="button" class="btn-book">Book House</button> </a>
               
               <?php echo "</td>";
               echo"</tr>";
                                           }
                                                     
               echo "</table>"; 
    }
    else{
        echo "Sorry there is no result in the location!";
    }
}
?>          </div>
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
</body>
</html>
