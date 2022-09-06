<?php
session_start();

$myUser = 'jackson1999@gmail.com';
$myPwd = '123456';

if($_POST['user'] == $myUser && $_POST['pwd'] ==$myPwd){
   $_SESSION['user'] = $_POST['user'];
   header('Location:panel.php');
}else{
   header('Location:index.php');
}


?>






























<!-- /* $myUser = 'admin@jackson.com';
$myPwd = '1234';

if($_POST['user']== $myUser && $_POST["pwd"] == $myPwd){
   session_start();
   print_r($_SESSION);
   $_SESSION['user'];
   header("Location: panel.php");
}else{
   header("Location: index.php"); } */ --> 
