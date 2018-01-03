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
        <title>Auedbaki | New Article</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
    <!--Include of Header-->
    <?php include dirname(__FILE__).'/includes/header.php';
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
    ?>
   
    <!--End of Header-->
    <div class="uk-container uk-container-center uk-hidden-small article-form" style="margin-top:10px;">
         <form class="uk-form " action="backprogram/newarticle.php" method="POST" enctype="multipart/form-data">
                <div class="uk-grid ">
                        <div class=" uk-width-7-10">
                        <div class="uk-text-left" >
                                <input type="text" id="title" class="uk-form-width-large" name="title" placeholder="Title of Post" value="<?php if(isset($title)) echo $title; ?>">
                                
                                <select class="uk-form-width-medium" name="category" >
                                    <?php 
                                    include 'backprogram/connect.php' ;
                                    $sql="select * from `category`;";
                                    $result=mysqli_query($db,$sql);
                                    if(!isset($category)){
                                        if(mysqli_num_rows($result)>0){
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                
                                                echo '<option>'.$row['categoryname'].'</option>';
                                            }
                                        }
                                        else
                                        {
                                            echo "There are No Categories";
                                        }
                                    }
                                    else{
                                       echo "<option>".$category."</option>";
                                    }
                                    ?>
                                </select>

                                <br> <br><textarea id="body" name="article" class="uk-width-auto"  data-uk-htmleditor="{mode:'split'}"><?php  if(isset($body)) echo $body; ?></textarea>
                        </div><br>
                             
                        </div>
                        <div class="uk-width-3-10  uk-container uk-text-left">
                            <button class="uk-button uk-button-success uk-width"type="submit">Submit Article</button><br><br>
                            <label for="author">Author : </label><input id="author" type="text" value="<?php echo $username; ?>" disabled> <br> <br>
                            <input class="uk-width" id="file" type="file" name="file" ><br> <br>
                            <P>Allowed File Extension : JPG, JPEG, PNG </p>
                            <textarea name="tags" class="uk-width" id="" rows="3" placeholder="Tags separated by comma ( , )"><?php  if(isset($tags)) echo $tags; ?></textarea><br>
                            <label><?php echo $message; ?></label>
                          
                        </div>

                </div>
        </form>       

    </div>
    <div class="uk-container uk-container-center uk-text-center contact uk-visible-small"  style="margin-top:50px;">
    <i class="uk-icon-laptop" style="font-size:130px;"></i>
            <h1 class="uk-text-danger">Use Desktop for writing Article.</h1>
            <a href="index.php"><i class="uk-icon-home" style="font-size:30px;"></i> Go Back to Home</a><br><br>
    </div>

    
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
<script>
 $(".article-form").submit(function(e) {
                var title = $("#title").val();
               
                var body = $("#body").val();
                var file = $("#file").val();
               
                if (title == '' ) {
                e.preventDefault();
                UIkit.notify('Article Title is not Provided',{status:'danger'});
                }
                if (body == '' ) {
                e.preventDefault();
                UIkit.notify('Article Body should not be empty',{status:'danger'});
                }
                if (file == '' ) {
                e.preventDefault();
                UIkit.notify('Article thumbnail is not set.',{status:'danger'});
                }
            });
</script>