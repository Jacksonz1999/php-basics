<?php
  $thefolder = "../root/".$_GET["path"];


 if ($handler = opendir($thefolder)) {
	echo "<ul>";
    if($handler != '.' && $handler !='..'){
    while (false !== ($files = readdir($handler))) {
            echo "<li>$files</li>";
    }
    echo "</ul>";
    closedir($handler);
} 
  
}


