<?php $page_id=100; 
        if(isset($_GET['message'])){
            $message=$_GET['message'];
        }
        else
        {
            $message="";
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | Edit Article</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
    <!--Include of Header-->
    <?php include dirname(__FILE__).'/includes/header.php';
            include 'backprogram/connect.php' ;
            if(isset($_GET['title']))
            $title = $_GET['title'];
            if(isset($_GET['tags']))
            $tags = $_GET['tags'];
            if(isset($_GET['body']))
            $body = $_GET['body'];
            if(isset($_GET['file']))
            $file = $_GET['file'];
            if(isset($_GET['category']))
            $category = $_GET['category'];
            if(isset($_GET['id'])){
                $id = $_GET['id'];
    $sql="SELECT * FROM articleposts WHERE `author`='$username' and `postid`='$id'";
    $result=mysqli_query($db, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        {
        $check = 1;
        $title = $row['title'];
        $category = $row['category'];
        $tags = $row['tags'];
        $body = $row['body'];
        }
    }
    else
    {
        $check = 0;
    }
    }
    ?>

    <!--End of Header-->
                <div class="uk-container uk-container-center uk-text-center  <?php if($check == 1) echo 'uk-hidden'; ?>" style="margin-top:200px; margin-bottom:217px;">
                
                <h1 class="uk-text-danger">Don't be Smart</h1>
                <h1 class="uk-text-danger">Because</h1>
                <h1 class="uk-text-danger">Admin is smarter then you.</h1>
                </div>

                <div class="uk-container uk-container-center uk-hidden-small <?php if($check == 0) echo 'uk-hidden'; ?>" style="margin-top:10px;">
                    <form class="uk-form " action="backprogram/editarticle.php" method="POST" enctype="multipart/form-data">
                            <div class="uk-grid ">
                                    <div class=" uk-width-7-10">
                                    <div class="uk-text-left" >
                                            <input type="text" class="uk-form-width-large" name="title" placeholder="Title of Post" value="<?php if(isset($title)) echo $title; ?>">
                                            
                                            <select class="uk-form-width-medium" name="category" >
                                                <?php 
                                                if(!isset($category)){
                                                $sqlc="select * from `category`;";
                                                $resultc=mysqli_query($db,$sqlc);
                                            
                                                    if(mysqli_num_rows($resultc)>0){
                                                        while($row = mysqli_fetch_assoc($resultc))
                                                        {
                                                            
                                                            echo '<option>'.$row['categoryname'].'</option>';
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "<option> There are No Categories </option>";
                                                    }
                                                }
                                                else{
                                                echo "<option>".$category."</option>";
                                                }
                                                ?>
                                            </select>

                                            <br> <br><textarea  name="article" class="uk-width-auto"  data-uk-htmleditor="{mode:'split'}"><?php  if(isset($body)) echo $body; ?></textarea>
                                    </div><br>
                                        
                                    </div>
                                    <div class="uk-width-3-10  uk-container uk-text-left">
                                        <button class="uk-button uk-button-success uk-width"type="submit">Update Article</button><br><br>
                                        <label for="author">Author  :   </label><input id="author" type="text" value="<?php echo $username; ?>" disabled> <br> <br>
                                        <input type="hidden" name="postid" value="<?php echo $id; ?>">
                                        <textarea name="tags" class="uk-width" id="" rows="3" placeholder="Tags separated by comma ( , )"><?php  if(isset($tags)) echo $tags; ?></textarea><br>
                                        <label><?php echo $message; ?></label>
                                    
                                    </div>
                        
                            </div>
                    </form>       

                </div>
                <div class="uk-container uk-container-center uk-text-center contact uk-visible-small"  style="margin-top:50px;">
                    <i class="uk-icon-laptop" style="font-size:130px;"></i>
                    <h1 class="uk-text-danger">Use Desktop for Editing Article.</h1>
                    <a href="index.php"><i class="uk-icon-home" style="font-size:30px;"></i> Go Back to Home</a><br><br>
            </div>
    
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
