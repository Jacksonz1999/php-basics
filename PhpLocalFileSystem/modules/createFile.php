<?php

try{
    $newFile = "../root/".$_GET["path"];
    $fileContent = '«No se trata de si van a derribarte, se trata de si vas a levantarte cuando lo hagan» 
—Vince Lombardi,';
    $file = fopen($newFile, 'w');
    fwrite($file, $fileContent);
    fwrite($file,"\nHOLA BIENVENIDO.");
    $file = fopen($newFile,'r');
    $content = fread($file,filesize($newFile));
    fclose($file);
    header("Location: index.php");
} catch (Throwable $t) {
}

