<?php $page_id=1; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | Home</title>
        <?php include 'includes/head.php' ; ?>
    </head>
    <body>
    <!--Include of Header-->

    <?php include 'includes/header.php'; ?>
    
    <?php include 'includes/slider.php'; ?>
    <div class="uk-notify uk-notify-top-center top-notify" style="display: none;"></div>
    <!--End of Header-->
    <div class="uk-container uk-container-center">
        <?php include 'backprogram/connect.php'; 
            include 'includes/categorycount.php';?>
        <!--Horizontal Grid 1-->
        
        <div class="uk-grid uk-hidden-small">
            <div class="uk-width-1-3">
            <?php include 'includes/recent-articles.php'; ?>
            </div>

            <div class="uk-width-1-3">
            <?php include 'includes/recent-comments.php'; ?>
            </div>

            <div class="uk-width-1-3">
            <?php include 'includes/categories.php'; ?>
            </div>
        </div>

        <!--Horizontal Grid 2-->
        <div class="uk-grid uk-hidden-small">
            <div class="uk-width-1-3">
            <?php include 'includes/subscribe.php'; ?>
            </div>

            <div class="uk-width-1-3 ">
                <div class="uk-container-center sitestatics">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fauedbaki&tabs&width=340&height=213&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=274459319675509" width="340" height="213" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
            
            <div class="uk-width-1-3">
            </div>
        </div>

        <div class="sitestatics  uk-hidden-small" style="margin-top:10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28383.79748188381!2d78.21901177843372!3d27.219944574873733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397468eeec83732f%3A0x5a73180a17478625!2sTundla%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1514131960248" width="1120" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
  

    <!--Include of Footer-->
    <?php include 'includes/footer.php' ; ?>
    <?php include 'includes/notice.php' ; ?>

 



    </body>
</html>
