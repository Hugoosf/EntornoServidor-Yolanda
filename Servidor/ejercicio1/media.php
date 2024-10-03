<?php

//Sumar 10, 20, 30, 40 y 50 e imprime la media de dicha suma

$var=10;
$sum=0;

for($i=0; $i<5;$i++){
    $M[$i]=$var;
    $sum += $M[$i];
    $var += 10;
}

echo "<h1>La media es " . ($sum/5) . "<h1>";

?>