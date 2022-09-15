<?php
$path = "../root/".$_GET["path"];


delDir($path);
function delDir($path){
    $dir = opendir($path);
    while($filename = readdir($dir)){
        if($filename !='.' && $filename !='..'){
            $newPath = $path.'/'.$filename;
            if(is_dir($newPath)){
                delDir($newPath);
            }else{
                unlink($newPath);
                echo 'Borrado el documento'.$newPath.'<br>';
                
            }
        }
    }
closedir($dir);
header("Location: ../index.php");
}

?>