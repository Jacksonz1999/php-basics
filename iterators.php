<?php

for ($i =0; $i <= 10; $i++){
    echo $i ;
}
echo'<br>';
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;
}
echo'<br>';
$i = 1;
while ($i <= 10){
echo $i++;}

echo'<br>';
$i = 100;
do {
    echo $i;
} while ($i > 101);

?>