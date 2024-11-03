<?php

$valor = " Es tu nombre O\'reilly? ";
$resultado = trim($valor);


echo "Resultado de trim: '" . $resultado . "'<br>";



$resultado = stripslashes($valor);

echo "Resultado de stripslashes: '" . $resultado . "'";

?>