<?php

$boolean = '';

if($boolean){
    echo 'noice!';
} else {
    echo 'no noice!';
}
echo '<br>';
$integer = 1;
var_dump($integer); 
echo '<br>';
$float = 1.333;
var_dump($float);
echo '<br>';
echo 'Me llamo Jackson!';
echo '<br>';

$array = array(
1 => 'a',
0.5 => 'holaaaa',
3 => 'c',
4 => 'adioooos',
);
var_dump ($array) ;
echo '<br>';
class foo
{
    function do_that()
    {
        echo "Doing types."; 
    }
}
$bar = new foo;
$bar->do_that();
echo '<br>';
$null = 'I love PHP';
$null == null;

?>