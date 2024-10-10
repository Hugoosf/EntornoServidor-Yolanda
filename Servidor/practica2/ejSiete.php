<?php

$matriz = array(array(1,2,3,4),
                array(5,6,7,8),
                array(9,7,8,3));

$max = array();
$sum = array();


for($i=0; $i<3; $i++){
$may = 0;
$sum[$i] = 0;
for($j=0; $j<4; $j++){
    if($matriz[$i][$j] > $may){
        $mayor = $matriz[$i][$j];
        $max[$i] = $mayor;
    }

    $sum[$i] += $matriz[$i][$j];
}
echo "Fila $i - Número mayor: ".$max[$i]." Media: ".($sum[$i]/4)."<br>";
}












?>