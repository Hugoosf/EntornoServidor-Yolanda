<?php
require_once 'Vehiculo.php';

$vehi = new Vehiculo("verde", 1400);

echo $vehi . "<br>";

echo $vehi->circula() . "<br>";
echo $vehi->circula() . "<br>";
echo $vehi->anadir_persona(65) . "<br>";
echo $vehi->anadir_persona(65) . "<br>";
echo $vehi->anadir_cadenas_nieve() . "<br>";
echo $vehi->anadir_cadenas_nieve() . "<br>";

echo $vehi->repintar("rojo") . "<br>";
echo $vehi->anadir_cadenas_nieve() . "<br>";
echo $vehi->anadir_cadenas_nieve() . "<br>";








?>