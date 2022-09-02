<?php
//Create an example of use for arithmetic operators: +, -, *, /, and%
//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
$i = 2;
$a = 3;
echo ($i + $a);
echo '<br>';
echo ($i - $a);
echo '<br>';
echo ($i * $a);
echo '<br>';
echo ($i / $a);
echo '<br>';
echo ($i % $a);
echo '<br>';

var_dump ($i == $a);
echo '<br>';
var_dump($i != $a);
echo '<br>';
var_dump($i < $a);
echo '<br>';
var_dump($i > $a);
echo '<br>';
var_dump($i <= $a);
echo '<br>';
var_dump($i >= $a);
echo '<br>';
echo '<h4>logical operators</h4>';
echo '<br>';
var_dump ($i && $a);
echo '<br>';
var_dump ($i and $a);
echo '<br>';
var_dump ($i || $a);
echo '<br>';
var_dump ($i or $a);
echo '<br>';
var_dump ($i xor $a);
echo '<br>';
var_dump (!$a);
echo '<br>';
?>