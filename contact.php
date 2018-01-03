<?php $page_id = 4; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auedbaki | CONTACT</title>
        <?php include 'includes/head.php' ?>
    </head>
    <body>
    <!--Include of Header--> 
    <?php include 'includes/header.php';?>
    <!--End of Header-->
    
    <div class="uk-container uk-container-center contact for-shake">
    <form class="uk-form uk-form-horizontal uk-margin-large " action="backprogram/contact.php" method="post">
    <fieldset data-uk-margin>
                    <legend  >SEND E-MAIL</legend>
                    <div id="message"></div>
                    
                    <input id="name" type="text" name="name" placeholder="Your Full Name">
                    <br><br>
                    <input id="email" type="text" name="email" placeholder="E-mail (Required)">
                    <br><br>
                    <input id="subject" type="text" name="subject" placeholder="Subject">
                    <br><br>
                    <textarea  class="uk-width-* message" name="message" rows="5" placeholder="Message"></textarea>
                    <br><br>
                    <button class="uk-button uk-button-primary" type="submit" name="submit" >Send</button>                       
    </fieldset>
    </form>
    </div>


    <!--Include of Footer-->
    <?php include 'includes/footer.php'?>

    <script>
        $(document).ready(function() {
        
        });

        $(document).ready(function(){

            $("button[type=submit]").click(function(e) {
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                if (name == '' || email == '' || subject == '') {
                e.preventDefault();
                UIkit.notify('Please Fill Required Fields ...',{status:'danger'});
                $(".for-shake").effect("shake");
                }
            });

           $("#name").click(function(){
            UIkit.notify('Enter your full name',{status:'success'});
            
           });
           $("#email").click(function(){
            UIkit.notify('Enter your valid E-mail Address',{status:'primary'});
            
           });
           $("#subject").click(function(){
            UIkit.notify('Enter subject regarding your contact',{status:'warning'});
            
           });
           $(".message").click(function(){
            UIkit.notify('Type your discription...',{status:'success'});
            
           });
            
        });
    </script>
    


    </body>
</html>
