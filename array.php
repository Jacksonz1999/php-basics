<?php

/* Define a simple array composed of text strings
Define a simple array consisting of whole numbers and decimal numbers
Define a multidimensional array
Execute the function that allows to obtain the length of an array
Execute the function that allows to obtain the combination of two arrays
Execute the function that once is given an array return the last element of it
Execute the function that once is given an array add a new element to the array in question */

$age =array('Jack'=>'24',"Ben"=>"37","Joe"=>"43");
echo 'Jackson is '. $age['Jack'] . 'years old';

$numbers =array( 1,2,3,4,5);
echo '<br>';
var_dump($numbers);

$phone = array(
    array('NothingPhone',100,20)
);
echo '<br>';
echo $phone[0][0].": In stock: ".$phone[0][1].", sold: ".$phone[0][2]."<br>";
var_dump($phone);
echo '<br>';
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2=array("e"=>"red","f"=>"yellow","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
echo '<br>';
$marcas =array('apple','Huawei','Xiaomi');
echo end($marcas);
$saludo =array('Hola', 'Holi','Wtsupp');
array_push($saludo,'Ktal','adios');
echo '<br>';
var_dump($saludo);
?>
