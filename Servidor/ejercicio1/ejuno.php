<?php

$uno = 4; 
$dos = 5;
$oper = 0;


if($uno == $dos){
   $oper = $uno * $dos;
   echo "La multiplicación es ";
} else if($uno > $dos){
   $oper = $uno - $dos;
   echo "La resta es ";
} else{
    $oper = $uno + $dos;
    echo "La suma es ";
}

echo $oper;







?>