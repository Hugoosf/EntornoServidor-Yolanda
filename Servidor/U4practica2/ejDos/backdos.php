<?php

$value = " Es tu nombre O\'reilly? ";

function test_entrada($valor) {
    $valor = trim($valor);
    $valor = stripslashes($valor);
    return $valor;
   }
   
$resultado = test_entrada($value);

echo "'" . $resultado . "'";

?>