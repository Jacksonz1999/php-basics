<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSizeName = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileTypeName = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileAcutalExt = strtolower(end($fileExt));
    $allowed =array("jpg","jpeg","png","pdf",);

if(in_array($fileAcutalExt, $allowed)){
    if($fileError === 0){
        if($fileSizeName < 1000000){
           $fileNameNew = uniqid('',true).".".$fileAcutalExt;
           $fileDestination = "../root/uploads/".$fileNameNew;
           move_uploaded_file($fileTmpName,$fileDestination);
           header("Location:index.php?upload-sucess");
        } else {
            echo "Your file is too big!";
        }
    } else {
        echo "There was an error uploading your file!";
    }
} else {
    echo "You can't upload files of this type!";
}

}

?>