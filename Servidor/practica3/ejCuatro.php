<?php
function filtrarMenoresQueLimite($array, $limite) {
    $resultado = [];
    
    foreach ($array as $numero) {
        if ($numero < $limite) {
            $resultado[] = $numero;
        }
    }
    
    return $resultado;
}
?>
