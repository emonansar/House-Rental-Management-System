<!-- <!-- <?php
             if (isset($_GET['submit'])) {
                $name=$_GET['housename'];
                $location=$_GET['location'];
                $des=$_GET['description'];
                $photo=$_FILES['photo']['name'];
                
                if($photo==" ")
                { 
                  $updatesql="UPDATE display_images SET description='$des',location='$location' WHERE Name='$name' ";
                  $updateres=mysql_query($updatesql);
                  if($updateres)
                {

                    echo "<font color='Blue'>Record is successfully updated.</font>";

                }
                else{
                  print mysql_error();
                }
                    //$tempname= $_FILES["uploadfile"] ["tmp_name"];     
                    //$filename= $_FILES["uploadfile"] ["name"];
                      //$folder = "pictures/".$filename;  
                 }
               
                 
        $updatesql="UPDATE display_images SET images='$filename',description='$des',location='$location' WHERE Name='$name' ";
        $updateres=mysql_query($updatesql);
                //$data=mysqli_query($conn,$query);
        move_uploaded_file($_FILES['photo']['tmp_name'],"pictures/".$photo);
                if($updateres)
                {

                    echo "<font color='Blue'>Record is successfully updated.</font>";

                }
                else{
                  print mysql_error();
                }
              }
        ?> --> -->