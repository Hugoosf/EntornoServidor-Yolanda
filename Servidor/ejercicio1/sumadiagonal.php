<?php

$h=0;
$p=3;
$sum=0;
$sumsec=0;

$M = array(array(1,2,3,5),
           array(5,6,7,8),
           array(9,2,2,3),
           array(4,5,6,7));


    for($i=0; $i<4; $i++){
        
            $sum += $M[$i][$h];
            $sumsec += $M[$i][$p];
        
        $h++;
        $p--;
    }

  

echo "<h1>La suma de la diagonal principal es " . ($sum) . "<h1>";
echo "<h1>La suma de la diagonal secundaria es " . ($sumsec) . "<h1>";

?>