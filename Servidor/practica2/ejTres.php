<?php

$pares = array();
$num = 0;

for($i=0; $i<=10; $i++){

    $pares[$i] = $num;
    $num += 2;

}

for($i=0; $i<=10; $i++){

   echo $pares[$i]. " "; 
   

}




?>