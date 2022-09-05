<?php

function sum($a1,$a2){
    return $a1+$a2;
}
echo sum(2,4);
echo'<br>';
function mult($a1,$a2){
    return $a1*$a2;
}
echo mult(2,4);
echo'<br>';
function div($a1,$a2){
    return $a1/$a2;
}
echo div(4,2);


function ope($a1,$a2,$vario){
    switch($vario){
        case '+':
            echo $a1 + $a2;
            break;
        case '*':
            echo $a1 * $a2;
            break;
        case'/':
            echo $a1/$a2;
            break;
        default:
            return 'error';
            break;
    }
}
echo'<br>';
echo ope(30,20,'*');

?>
