<?php

function imageName(){

$csv = './assets/uploads/csv.png';
$exe = './assets/uploads/exe.png';
$jpg = './assets/uploads/jpg.png';
$mp3 = './assets/uploads/mp3.png';
$mp4 = './assets/uploads/mp4.png';
$odt = './assets/uploads/odt.png';
$pdf = './assets/uploads/pdf-file.png';
$png = './assets/uploads/png.png';
$ppt = './assets/uploads/ppt.png';
$rar = './assets/uploads/rar.png';
$svg = './assets/uploads/svg.png';
$txt = './assets/uploads/txt-file.png';
$word = './assets/uploads/word.png';
$zip = './assets/uploads/zip.png';



switch($imageHola){
    case 'csv':
    echo $csv;
    break;
    case "exe":
    echo $exe;
    break;
    case 'jpg':
    echo $jpg;
    break;
    case "mp3":
    echo $mp3;
    break;
    case "mp4":
    echo $mp4;
    break;
    case "odt":
    echo $odt;
    break;
    case "pdf":
    echo $pdf;
    break;
    case "png":
    echo $png;
    break;
    case "ppt":
    echo $ppt;
    break;
    case "rar":
    echo $rar;
    break;
    case "svg":
    echo $svg;
    break;
    case $txt:
    echo $txt;
    break;
    case "word":
    echo $word;
    break;
    case "zip":
    echo $zip;
    break;
    
    }
    
}




?>