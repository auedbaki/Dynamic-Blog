<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']!='ADMIN'){
            header("Location: index.php?message=You are not allowed to access this page");
        }
    }
    else{
        header("Location: index.php?message=You are not Logged in");
    }
?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Auedbaki | Dashboard</title>
        <?php include  dirname(__FILE__).'/includes/head.php' ?>
        <?php include  dirname(__FILE__).'/backprogram/connect.php' ?>
    </head>
    <body >
    
    <div class="uk-hidden-small">
    <!--Include of Header-->
    <?php include 'includes/admin/header.php' ?>
    <!--End of Header-->
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-2-10 ">
                <!--Include of Sidebar-->
                <?php include 'includes/admin/sidebar.php' ?>
                <!--End of Sidebar-->
                </div>

                <div id="admin_main" class="uk-width-8-10 " style="padding:10px;" >
                    <h1>Dashboard</h1>
                    <!--Grid area-->
                            <div class="uk-container uk-container-center uk-grid">
                                <div class="uk-width-1-3">
                                    <div class="uk-container uk-container-center sitestatics">
                                    <h4> Site Statics </h4>
                                    <?php include 'includes/registered-member.php'; ?>
                                    <?php include 'includes/subscribed-member.php'; ?>
                                    </div>
                                </div>

                                <div class="uk-width-1-3">
                                <?php include 'includes/admin/article-count.php';?>
                                </div>

                                <div class="uk-width-1-3">
                                </div>
                            </div>
                    <!--Grid area-->
                </div>
            </div>
     </div>
    <div class="uk-visible-small uk-container uk-container-center uk-text-center contact" style="margin-top:50px;">
        <i class="uk-icon-desktop" style="font-size:130px;"></i>
      
         <h1 class="uk-text-danger">Hey Admin, Buy a Desktop For Goto Dashboard</h1>
         <p class="uk-text-primary"><a href="index.php"><i class="uk-icon-home" style="font-size:30px;"></i>  Go Back To Home</a></p>
    </div>

  

    <!--Include of Footer-->
    <?php include  dirname(__FILE__).'/admin/js.php'?>
    <?php include  dirname(__FILE__).'/includes/js.php'?>



    </body>
</html>