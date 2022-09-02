<?php
/* 

Create a double condition that evaluates:
If the current minute is less than 10. Displays a message of type 
"the current minute is less than 10", if the current minute is greater than 15, 
displays a message of the type "the current minute is more than 15". 
If you do not meet any of the two conditions above: 
Displays a message of the type "does not meet any conditions”
Create a switch type control structure to display a different message depending 
on the current day of the week. You can write any type of message, 
because the important thing is that you understand how it works and in what cases you can use it.

 */
$a = date('l');
if ($a == 'Monday'){
    echo 'We are on Monday.';
}
$b = date('F');
if ($b == 'October'){
    echo 'We are in October';

}elseif ($b !='October'){
    echo date('F');
}
echo '<br>';
$c = date('i');
if ($c < 10){
    echo "the current minute is less than 10";

}elseif ($c > 15){;
    echo 'the current minute is more than 15';

}else 
    echo 'does not meet any conditions' ;

echo '<br>';
$d = 2;
switch($d){
    case 0:
        echo 'hola';
        break;
    case 1:
        echo 'comostas';
        break;
    case 2:
        echo 'adios';
        break;
}
?>