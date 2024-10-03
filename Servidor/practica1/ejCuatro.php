<?php

$n1 = rand(0,1000);
$n2 = rand(0,1000);

echo "Número uno: ".$n1."<br>";
echo "Número dos: ".$n2."<br>";

if($n1>$n2){
    $mayor = $n1;
}else{
    $mayor = $n2;
}

if($mayor%2 == 0){
    echo "El número mayor es ".$mayor." y es par";
}else{
    echo "El número mayor es ".$mayor." y es impar";
}

?>