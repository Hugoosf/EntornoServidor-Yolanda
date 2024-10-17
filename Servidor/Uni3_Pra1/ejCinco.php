<?php


$matriz = array();

for($i = 0; $i<3; $i++){
    
    for($j = 0; $j<5; $j++){
        
        $aletuno = rand(1,9); 
        $matriz[$i][$j]= $aletuno;

    
    }


}
for($i = 0; $i<3; $i++){
    
    for($j = 0; $j<5; $j++){
    
        echo "(".$matriz[$i][$j].")";


    }
echo"<br>";

}
echo"<br>";

for($i = 0; $i<3; $i++){
    
    for($j = 0; $j<5; $j++){
    
        echo "(".$matriz[$i][$j].")";


    }


}
echo "<br>";
for($i = 0; $i<5; $i++){
    
    for($j = 0; $j<3; $j++){
    
        echo "(".$matriz[$j][$i].")";


    }


}







?>