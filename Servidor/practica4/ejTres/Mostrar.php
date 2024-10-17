<?php
require_once 'Vehiculo.php';

$vehi = new Vehiculo("negro", 1500);

echo $vehi . "<br>";

echo $vehi->circula() . "<br>";
echo $vehi->circula() . "<br>";
echo $vehi->anadir_persona(70) . "<br>";
echo $vehi . "<br>";






?>