<?php $page_id=100;

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | My Comments</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
        
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/header.php';?>
    <div  class="uk-container uk-container-center">
    <?php
        echo '<h2> My Comments</h2>';
        include 'backprogram/connect.php';    
        $sql="SELECT * FROM usercommentview WHERE author = '$username' order by comid DESC ;";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)>0){
            echo '<p class="uk-text-danger">Note : Clicking of delete button will instantly delete the comment from database.</p>';
            while($row = mysqli_fetch_assoc($result))
            {   
                
                echo '       
                
                <form class="uk-container uk-container-center comments-admin uk-grid com-form'.$row['comid'].'">   
                <div class="uk-width-8-10">
                    <header class=" uk-grid-medium uk-flex-middle uk-width-auto" style="margin-left:0px;" uk-grid>
                        
                        <div class="uk-width-auto">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="'.'blog.php?id='.$row['postid'].'"> ON :- '.
                            $row['title'].'
                            </a></h4>
                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                <li><a href="#">Category: '.$row['category'].'</a></li>
                                <li><a href="#"> Date: '.$row['date'].'</a></li>
                                <li><a href="#"> Comment ID: '.$row['comid'].'</a></li>
                                <input type="hidden" id="comid'.$row['comid'].'" value="'.$row['comid'].'"/>
                                <p class="com-message'.$row['comid'].'"> </p>
                            </ul>
                        </div>
                        
                    </header>
                    <div class="uk-comment-body uk-width-auto"> '.$row['message'].'
                    </div>
                </div>
                <div class="uk-width-2-10 uk-text-right " style="margin-top:4px;">
                
                <button id="com-delete" type="submit" class="uk-button uk-button-danger "><i class="uk-icon-remove"></i>  Delete </button>

                </div>
               </form>
               
               <!--Script for every comment-->
                <script>
                    $(document).ready(function(){
                        $(".com-form'.$row['comid'].'").submit(function(event){
                            event.preventDefault();
                                var comid = $("#comid'.$row['comid'].'").val();
                            $(".com-message'.$row['comid'].'").load("admin/comments-delete.php",{
                                comid: comid
                            });
                            $(".com-form'.$row['comid'].'").slideUp(1000);
                        });
                    });
                
                </script>
               
                ';
            }
        }
        else
        {
            echo '<h4 style="height: 505px;" > There are No comments given by You <h4>';
        }
?>
 
</div>
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
