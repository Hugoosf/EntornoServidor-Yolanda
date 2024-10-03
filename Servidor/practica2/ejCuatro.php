<?php

$matriz = array();

for($i = 0; $i<4; $i++){
    
    for($j = 0; $j<4; $j++){
        
        $aletuno = rand(1,9); 
        $matriz[$i][$j]= $aletuno;

    
    }


}


for($i = 0; $i<4; $i++){
    
    for($j = 0; $j<4; $j++){
        
        
       echo "(".$matriz[$i][$j].")";

    
    }
    echo "<br>";

}

echo "<br>";
$var = 3;
echo "P S<br>";
for($i = 0; $i<=3; $i++){
    
    echo $matriz[$i][$i]." ".$matriz[$i][$var]."<br>";
    $var --;


}






?>