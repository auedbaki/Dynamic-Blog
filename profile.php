<?php $page_id=100;
$username1=$_GET['username'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | User Profile</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
    <!--Include of Header-->
    <?php include dirname(__FILE__).'/includes/header.php';
    include dirname(__FILE__).'/backprogram/connect.php';
   
    $sql="SELECT * FROM userdetails WHERE `username` ='$username1';";
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

                        </div>

                        <form class="uk-form  uk-width-7-10">
                        <legend > 
                        <div class="uk-grid">
                            <div class="uk-text-left uk-width-1-2">Details</div>
                            <div class="uk-text-right uk-width-1-2 <?php if( $username==$username1 ) {echo 'uk-visible';} else {echo 'uk-hidden';}  ?>"><a  href="editprofile.php">Edit Profile</a></div>
                        </div> 
                        </legend>
                        <div class="uk-grid">
                            
                            <div class="uk-width-1-2">
                            <label for="username">Username:</label><label id="username"><?php echo $username1; ?></label><br><br>
                            <label for="fname">Firstname:</label><label id="fname"><?php echo $fname; ?></label><br><br>
                            <label for="city">City:</label><label id="city"><?php echo $city; ?></label><br><br>
                            <label for="dob">D.O.B.:</label><label id="dob"><?php echo $birthday; ?></label><br><br>
                            <label for="website">Website:</label><label id="website"><a href="<?php echo $website; ?>"><?php echo $website; ?></a></label><br><br>
                            <label for="interest">Interests:</label><label id="interset"><?php echo $interests?></label><br><br>
                            </div>
                            <div class="uk-width-1-2">
                            <label for="email">E-mail:</label><label id="email"><a href="<?php echo "mailto:".$email; ?>"><?php echo $email; ?></a></label><br><br>
                            <label for="lname">Lastname:</label><label id="lname"><?php echo $lname; ?></label><br><br>
                            <label for="country">Country:</label><label id="country"><?php echo $country; ?></label><br><br>
                            <label for="join">Join Date:</label><label id="join"><?php echo $joindate; ?></label><br><br>
                            <label for="phoneno">Phone:</label><label id="phoneno"><?php echo $phone; ?></label><br><br>
                            </div>
                            
                        </div>
                            <div class="uk-container uk-container-center userarticle " >
                            <legend> Articles Posted by <?php echo $username1; ?> </legend>
                            <?php include dirname(__FILE__).'/includes/userarticles.php'?>
                            </div>
                        </form>
                </div>
                

    </div>
    <div class="uk-container uk-container-center uk-visible-small">
                        <div class=" uk-text-center">
                        <img class="uk-border-rounded profilesmall" src="<?php echo $pimage; ?>" alt="Profile Photo" >

                        </div>

                        <form class="uk-form  ">
                        <legend > 
                        <div class="uk-grid">
                            <div class="uk-text-left uk-width-1-2">Details</div>
                            <div class="uk-text-right uk-width-1-2 <?php if( $username==$username1 ) {echo 'uk-visible';} else {echo 'uk-hidden';}  ?>"><a  href="editprofile.php">Edit Profile</a></div>
                        </div> 
                        </legend>
                        <div >
                            
                           
                            <label for="username">Username:</label><label id="username"><?php echo $username1; ?></label><br><br>
                            <label for="fname">Firstname:</label><label id="fname"><?php echo $fname; ?></label><br><br>
                            <label for="lname">Lastname:</label><label id="lname"><?php echo $lname; ?></label><br><br>
                            <label for="email">E-mail:</label><label id="email"><a href="<?php echo "mailto:".$email; ?>"><?php echo $email; ?></a></label><br><br>
                            <label for="city">City:</label><label id="city"><?php echo $city; ?></label><br><br>
                            <label for="country">Country:</label><label id="country"><?php echo $country; ?></label><br><br>
                            <label for="dob">D.O.B.:</label><label id="dob"><?php echo $birthday; ?></label><br><br>
                            <label for="join">Join Date:</label><label id="join"><?php echo $joindate; ?></label><br><br>
                            <label for="website">Website:</label><label id="website"><a href="<?php echo $website; ?>"><?php echo $website; ?></a></label><br><br>
                            <label for="interest">Interests:</label><label id="interset"><?php echo $interests?></label><br><br>
                            
                           
                            <label for="phoneno">Phone:</label><label id="phoneno"><?php echo $phone; ?></label><br><br>
                            
                            
                        </div>
                            <div class="uk-container uk-container-center userarticle " >
                            <legend> Articles Posted by <?php echo $username1; ?> </legend>
                            <?php include dirname(__FILE__).'/includes/userarticles.php'?>
                            </div>
                        </form>
    </div>
    
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
