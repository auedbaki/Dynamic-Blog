<?php $page_id=100;

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | My Articles</title>
        <?php include dirname(__FILE__).'/includes/head.php' ?>

    </head>
    <body>
        
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/header.php';?>
    <h2 class="uk-container uk-container-center" > My Articles</h2>
    <div  class="uk-container uk-container-center">
    <?php
        
        include 'backprogram/connect.php';    
        $sql="SELECT * FROM articleposts WHERE author = '$username' order by postid DESC ;";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)>0){
            echo '<p class="uk-text-danger">Note : Deletion of the article will automaticaly delete the comments related to that post from database.</p>';
            while($row = mysqli_fetch_assoc($result))
            {   
                $status = $row['status'];
                if( $status == "APPROVED"){
                    $css = "userarticle";
                    $check = 'uk-visible';
                    $href = 'blog.php?id='.$row['postid'];
                }
                else{
                    if( $status == "PENDING"){
                        $css = "article-user";
                        $check = 'uk-visible';
                        $href = '#';
                    }
                    else{
                        $css = "article-rejected";
                        $check = 'uk-hidden';
                        $href = '#';
                    }
                }
                    
                echo '       
                
                <form class="uk-container uk-container-center uk-grid '.$css.' post-form'.$row['postid'].'" style="margin-bottom:2px;">   
                <div class="uk-width-7-10">
                    <header class="uk-grid-medium uk-flex-middle uk-width-auto" style="margin-left:0px;"  uk-grid>
                        <div class="uk-width-auto">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" target="_BLANK" href="'.$href.'">'.
                            $row['title'].'
                            </a></h4>
                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                <li>Author: '.$row['author'].'</li>
                                <li>Category: '.$row['category'].'</li>
                                <li> Date: '.$row['postdate'].'</li>
                                <li>Tags: '.$row['tags'].'</li>
                                <li>Post ID: '.$row['postid'].'</li>
                                <li>Status: '.$row['status'].'</li>
                                <input type="hidden" id="postid'.$row['postid'].'" value="'.$row['postid'].'"/>
                                <p class="post-message'.$row['postid'].'"> </p>
                                
                            </ul>
                        </div>
                        
                    </header>
                </div>

                <div class="uk-width-3-10 uk-text-right " style="margin-top:4px;">
                <a class="uk-button uk-button-primary '.$check.'" href="editarticles.php?id='.$row['postid'].'" target="_blank" rel="noopener" ><i class="uk-icon-edit"></i> Edit Article </a>
                <button id="post-delete" type="submit" class="uk-button uk-button-danger "><i class="uk-icon-remove"></i> Delete </button>
                </div>

               </form>
               <!--Script for every post-->
               <script>
                   $(document).ready(function(){
                       $(".post-form'.$row['postid'].'").submit(function(event){
                           event.preventDefault();
                               var postid = $("#postid'.$row['postid'].'").val();
                           $(".post-message'.$row['postid'].'").load("backprogram/articles-delete.php",{
                               postid: postid
                           });
                           $(".post-form'.$row['postid'].'").slideUp(1000);
                       });
                   });
               
               </script>
               
                ';
            }
        }
        else
        {
            echo '<h4 style="height: 505px;" > There are No Articles Posted by You <h4>';
        }
?>

</div>
    <!--Include of Footer-->
    <?php include dirname(__FILE__).'/includes/footer.php'?>




    </body>
</html>
