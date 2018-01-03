<?php $page_id = 2; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | BLOG</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
    <!--Include of Header-->
    <?php include dirname(__FILE__).'/includes/header.php';?>
    <!--End of Header-->
    
    <div class="uk-container uk-container-center uk-hidden-small" style="margin-top:20px;">

                <div class="uk-grid uk-grid-small ">

                        <div class="uk-width-7-10 uk-hidden-small">
                        <?php include dirname(__FILE__).'/includes/ads-top.php';
                              include 'includes/categorycount.php' ?>
                        <?php include dirname(__FILE__).'/includes/articles.php' ?>
                        <?php include dirname(__FILE__).'/includes/about-author.php' ?>
                        <?php include dirname(__FILE__).'/includes/pagination.php' ?>
                        <?php include dirname(__FILE__).'/includes/ads-bottom.php' ?>
                        <?php include dirname(__FILE__).'/includes/comment.php';?>
                        </div>


                        <div class="uk-width-3-10 uk-hidden-small">
                        <?php include dirname(__FILE__).'/includes/aside.php' ;?>
                        
                        </div>
                </div>
               

    </div>
    <div class="uk-margin-small uk-visible-small">
        <?php include dirname(__FILE__).'/includes/articles.php' ?>
        <?php include dirname(__FILE__).'/includes/about-author.php' ?>
        <?php include dirname(__FILE__).'/includes/pagination.php' ?>
        <?php include dirname(__FILE__).'/includes/commentmob.php';?>
    </div>
    
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>
    <?php include 'includes/notice.php' ; ?>



    </body>
</html>
