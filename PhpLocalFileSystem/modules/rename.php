<?php 


//myrename('./30','./611');
function myrename($dirsrc,$dirto){
    if(is_file($dirto)){
        return false;

    }
    if(!file_exists($dirto)){
        mkdir($dirto);
    }
    
    $dir = opendir($dirsrc);
    
    while($filename = readdir($dir)){
        if($filename != '.'&& $filename !='..'){
            $path1 = $dirsrc.'/'. $filename;
            $path2 = $dirto.'/'. $filename;
            if(is_dir($path1)){
                myrename($path1,$path2);
            } else{
                rename($path1,$path2);
            }
    }
  }
  closedir($dir);

  rmdir($dirsrc);
} 

?>