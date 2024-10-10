<?php

$matriz = array();
$mayor = 0;
$sumcolum = array();
$mayor = 0;

for($i = 0; $i<20; $i++){
    
    for($j = 0; $j<20; $j++){
        
        $aletuno = rand(1,9);
        

        
        $matriz[$i][$j] = $aletuno;

        echo $matriz[$i][$j]." ";

    
    }
    echo "<br>";

}

for($i = 0; $i<20; $i++){
    $sumcolum[$i] = 0;
    for($j = 0; $j<20; $j++){
        
        
        $sumcolum[$i] += $matriz[$j][$i];

    
    }

    if($sumcolum[$i] > $mayor){
        $mayor = $sumcolum[$i];
        $columna = ($i+1);
    }

    

}



echo "<br>Columna mayor: $columna - Suma: $mayor";






?>