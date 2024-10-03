<?php
$pri = 8;
$sec = 19;
$ter = 24;


if(($pri > $sec) && ($pri>$ter)){
    $mayor = $pri;
}else if(($sec > $pri) && ($sec>$ter)){
    $mayor = $sec;
}else{
    $mayor = $ter;
}
    echo "El número mayor es ".$mayor;

?>