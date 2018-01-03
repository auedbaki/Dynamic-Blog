<?php     session_start();
    if(isset($_SESSION['login_user'])){
        if($_SESSION['role']!='ADMIN'){
            header("Location: index.php?message=You are not allowed to access this page");
        }
    }
    else{
        header("Location: index.php?message=You are not Logged in");
    }?>
<h2>File Editor</h2>
<?PHP
 // Original PHP code by Chirp Internet: www.chirp.com.au
 // Please acknowledge use of this code by including this header.
 function getFileList($dir, $recurse=false)
    {
        $retval = array();
        // add trailing slash if missing
        if(substr($dir, -1) != "/") $dir .= "/";
        // open pointer to directory and read list of files
        $d = @dir($dir) or die("getFileList: Failed opening directory $dir for reading");
        while(false !== ($entry = $d->read())) {
            // skip hidden files
            if($entry[0] == ".") continue;
            if(is_dir("$dir$entry")) {
                $retval[] = array(
                    "name" => "$dir$entry/",
                    "type" => filetype("$dir$entry"),
                    "size" => 0,
                    "lastmod" => filemtime("$dir$entry")
                );
                if($recurse && is_readable("$dir$entry/")) {
                     $retval = array_merge["{$_SERVER['DOCUMENT_ROOT']}/auedbaki"]($retval, getFileList("$dir$entry/", true));
                }
            } elseif(is_readable("$dir$entry")) {
                $retval[] = array(
                "name" => "$dir$entry",
                "type" => mime_content_type("$dir$entry"),
                "size" => filesize("$dir$entry"),
                "lastmod" => filemtime("$dir$entry")
                );
            }
        }
        $d->close();
        return $retval;
    }


    // single directory



 

 
 // include subdirectories
 
?>
<div class="uk-grid uk-form uk-container uk-container-center">
    <div class="uk-width-1-2">
    <legend> Root </legend>
         <?php 
         $dirlist = getFileList("./");
        foreach($dirlist as $file) { 
            $filename=$file['name'];
            $fileExt=explode('.',$filename);
            $fileActualExt = strtolower(end($fileExt)); 
            if ($fileActualExt=='php') {
            $fileExt=explode('/',$filename);
            $fileActualExt = strtolower(end($fileExt)); 
            echo '<a id="" target="_BLANK" href="backprogram/fileeditor.php?address=../'.$fileActualExt.'">'.$fileActualExt.'</a><br><input id="" type="hidden" value="'.$fileActualExt.'">';
            
        }
             
        }
        ?>
    </div> 
    <div class="uk-width-1-2">
    <legend> Admin </legend>
        <?php
        $dirlist = getFileList("./admin/");
        foreach($dirlist as $file) { 
            $filename=$file['name'];
            $fileExt=explode('.',$filename);
            $fileActualExt = strtolower(end($fileExt)); 
            if ($fileActualExt=='php') {
            $fileExt=explode('/',$filename);
            $fileActualExt = strtolower(end($fileExt)); 
            echo '<a id="">'.$fileActualExt.'</a><br><input id="" type="hidden" value="'.$fileActualExt.'">';
            }
             
        }
         /*$dirlist = getFileList("./admin/");
        foreach($dirlist as $file) { echo $file['name'].'<br>';  }*/
        ?>
    </div>
    <div class="uk-width-1-2">
    <legend> Backprogram </legend>
    <?php 
    $dirlist = getFileList("./backprogram/");
    foreach($dirlist as $file) { 
        $filename=$file['name'];
        $fileExt=explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt)); 
        if ($fileActualExt=='php') {
        $fileExt=explode('/',$filename);
        $fileActualExt = strtolower(end($fileExt)); 
        echo '<a id="">'.$fileActualExt.'</a><br><input id="" type="hidden" value="'.$fileActualExt.'">';
        }
         
    }
     /*$dirlist = getFileList("./backprogram/");
     foreach($dirlist as $file) {   echo $file['name'].'<br>';  }*/
    ?>
    </div>
    <div class="uk-width-1-2">
    <legend> Includes </legend>
    <?php 
    $dirlist = getFileList("./includes/");
    foreach($dirlist as $file) { 
        $filename=$file['name'];
        $fileExt=explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt)); 
        if ($fileActualExt=='php') {
        $fileExt=explode('/',$filename);
        $fileActualExt = strtolower(end($fileExt)); 
        echo '<a id="">'.$fileActualExt.'</a><br><input id="" type="hidden" value="'.$fileActualExt.'">';
        }
         
    }
        /*$dirlist = getFileList("./includes/");
        foreach($dirlist as $file) {   echo $file['name'].'<br>'; }*/
    ?>
    </div>

</div>