<?php $page_id=100; 
        if(isset($_GET['editprofilesuccess'])){
            $message="< Profile Updated Succesfully. >";
        }
        else
        {
            $message="";
        }
        if(isset($_GET['upimage'])){
            $message1=$_GET['upimage'];
        }
        else{
            $message1="";
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | Edit Profile</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
    <!--Include of Header-->
    <?php include dirname(__FILE__).'/includes/header.php';
    include dirname(__FILE__).'/backprogram/connect.php';
   
    $sql="SELECT * FROM userdetails WHERE `username` ='$username';";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        {
            $pimage=$row['profileimage'];
            $fname=$row['firstname'];
            $lname=$row['lastname'];
            $email=$row['email'];
            $city=$row['city'];
            $country=$row['country'];
            $birthday=$row['birthday'];
            $joindate=$row['joindate'];
            $website=$row['website'];
            $phone=$row['phone'];
            $interests=$row['interests'];
        }
    }
    else
    {
        echo "There are No User Details";
    }

    ?>
    <!--End of Header-->
    <div class="uk-container uk-container-center uk-hidden-small" style="margin-top:10px;">
    
                <div class="uk-grid ">
                        <div class="uk-width-3-10 uk-text-right">
                        <img class="uk-border-rounded profile" src="<?php echo $pimage; ?>" alt="Profile Photo">
                        <form class="uk-form" action="backprogram/upimage.php" method="POST" enctype="multipart/form-data">
                           <br> <input class="uk-form-width-small" type="file" name="file">
                           <input type="hidden" name="oldimageurl" value="<?php echo $pimage; ?>">
                           <button class="uk-button" type="submit" name="submit"> Upload</button>
                        </form>
                        <br><label><?php echo $message1; ?></label>
                        </div>
                        
                        <form class="uk-form  uk-width-7-10" action="backprogram/editprofile.php" method="POST">
                        
                        <legend>
                        <div class="uk-grid">
                            <div class="uk-text-left uk-width-3-10">Edit Profile </div>
                            <div class="uk-text-center  uk-width-5-10"><label><?php echo $message; ?></label></div>
                            <div class="uk-text-right uk-width-2-10"><button class="uk-button uk-button-success" type=submit>Save Changes</button></div>
                        </div> 
                        </legend>
                        <div class="uk-grid">
                            
                            <div class="uk-width-1-2 uk-text-right">

                            <label for="username">Username: </label><input class="uk-form-width-medium" id="username"  type="text" name="username" value="<?php echo $username; ?>" disabled><br><br>
                            <label for="fname">Firstname: </label><input class="uk-form-width-medium" id="fname"  type="text" name="firstname" value="<?php echo $fname; ?>"><br><br>
                            <label for="city">City: </label><input class="uk-form-width-medium" id="city"  type="text" name="city" value="<?php echo $city; ?>"><br><br>
                            <label for="dob">D.O.B.: </label><input class="uk-form-width-medium" id="dob"  type="text" name="birthday" value="<?php echo $birthday; ?>"><br><br>
                            <label for="website">Website: </label><input class="uk-form-width-medium" id="website"  type="text" name="website" value="<?php echo $website; ?>"><br><br>
                            <label for="interest">Interests: </label><input class="uk-form-width-medium" id="interest"  type="text" name="interests" value="<?php echo $interests; ?>"><br><br>
                            </div>
                            <div class="uk-width-1-2 uk-text-right">
                            <label for="email">E-mail: </label><input class="uk-form-width-medium" id="email"  type="text" name="email" value="<?php echo $email; ?>"><br><br>
                            <label for="lname">Lastname: </label><input class="uk-form-width-medium" id="lname"  type="text" name="lastname" value="<?php echo $lname; ?>"><br><br>
                            <label for="country">Country: </label><input class="uk-form-width-medium" id="country"  type="text" name="country" value="<?php echo $country; ?>"><br><br>
                            <label for="join">Join Date: </label><input class="uk-form-width-medium"  id="join"  type="text" name="joindate" value="<?php echo $joindate; ?>" disabled><br><br>
                            <label for="phoneno">Phone: </label><input class="uk-form-width-medium" id="phoneno"  type="text" name="phone" value="<?php echo $phone; ?>"><br><br>
                            </div>
                            
                        </div>
                        </form>
                        
                </div>
                

    </div>
    <div class="uk-container uk-container-center uk-visible-small">
                        <div class="uk-container uk-container-center uk-grid">
                            <div  class="uk-width-1-2">
                                <br>
                                <img class="uk-border-rounded profilesmall" src="<?php echo $pimage; ?>" alt="Profile Photo"></div>
                                <form class="uk-form uk-width-1-2" action="backprogram/upimage.php" method="POST" enctype="multipart/form-data">
                                <br><br> <input class="uk-form-width-small" type="file" name="file"><br><br>
                                <input type="hidden" name="oldimageurl" value="<?php echo $pimage; ?>">
                                <button class="uk-button" type="submit" name="submit"> Upload</button>
                                </form>
                                <label><?php echo $message1; ?></label>
                        </div><br>
                        
                        <form class="uk-form" action="backprogram/editprofile.php" method="POST">
                        <div class="uk-text-center  uk-width-3-10"><label><?php echo $message; ?></label></div>
                        <legend>
                        
                              <div class="uk-grid"> 
                                <div class="uk-text-left uk-width-1-2">Edit Profile </div>
                                
                                <div class="uk-text-right uk-width-1-2"><button class="uk-button uk-button-success" type=submit>Save Changes</button></div>
                                </div> 
                        </legend>
                        <div class="uk-grid">
                            
                            <div class="uk-width-1-2 uk-text-left">

                            <label for="username">Username: </label><input class="uk-form-width-medium" id="username"  type="text" name="username" value="<?php echo $username; ?>" disabled><br><br>
                            <label for="fname">Firstname: </label><input class="uk-form-width-medium" id="fname"  type="text" name="firstname" value="<?php echo $fname; ?>"><br><br>
                            <label for="city">City: </label><input class="uk-form-width-medium" id="city"  type="text" name="city" value="<?php echo $city; ?>"><br><br>
                            <label for="dob">D.O.B.: </label><input class="uk-form-width-medium" id="dob"  type="text" name="birthday" value="<?php echo $birthday; ?>"><br><br>
                            <label for="website">Website: </label><input class="uk-form-width-medium" id="website"  type="text" name="website" value="<?php echo $website; ?>"><br><br>
                            <label for="interest">Interests: </label><input class="uk-form-width-medium" id="interest"  type="text" name="interests" value="<?php echo $interests; ?>"><br><br>
                            </div>
                            <div class="uk-width-1-2 uk-text-left">
                            <label for="email">E-mail: </label><input class="uk-form-width-medium" id="email"  type="text" name="email" value="<?php echo $email; ?>"><br><br>
                            <label for="lname">Lastname: </label><input class="uk-form-width-medium" id="lname"  type="text" name="lastname" value="<?php echo $lname; ?>"><br><br>
                            <label for="country">Country: </label><input class="uk-form-width-medium" id="country"  type="text" name="country" value="<?php echo $country; ?>"><br><br>
                            <label for="join">Join Date: </label><input class="uk-form-width-medium"  id="join"  type="text" name="joindate" value="<?php echo $joindate; ?>" disabled><br><br>
                            <label for="phoneno">Phone: </label><input class="uk-form-width-medium" id="phoneno"  type="text" name="phone" value="<?php echo $phone; ?>"><br><br>
                            </div>
                            
                        </div>
                        </form>
    </div>

    
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
