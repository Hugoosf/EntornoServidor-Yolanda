<?php

$matriz = array();
$mayor = 0;
for($i = 0; $i<10; $i++){
    
    for($j = 0; $j<10; $j++){
        
        $aletuno = rand(1,99);
        if($aletuno > $mayor){
            $mayor = $aletuno;
            $fila = $i+1;
            $colum = $j+1;
        } 
        $matriz[$i][$j]= $aletuno;

        echo $matriz[$i][$j]." ";

    
    }
    echo "<br>";

}

echo "<br>Número mayor: $mayor - Fila $fila y Columna $colum";






?>