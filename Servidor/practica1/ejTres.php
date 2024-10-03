<?php

$horas = 30;
$salariohora = 10;


if($horas > 40){
    $res= $horas - 40;
    if($res>8){
    $sueldo = $salariohora*40 + (3*$salariohora*($horas-48))+ (2*$salariohora*8);

    }else{
        $sueldo = $salariohora*40 + (2*$salariohora*($res));
    }
}else{
    $sueldo = $salariohora*$horas;
}

echo $sueldo;



?>