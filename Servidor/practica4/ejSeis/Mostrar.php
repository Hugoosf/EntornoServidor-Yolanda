<?php

include_once 'Coche.php';
include_once 'Dos_ruedas.php';
include_once 'Camion.php';


$coche = new Coche("verde", 2100, 4);


$coche->anadir_cadenas_nieve(2);


$coche->anadir_persona(80);


$coche->setColor("azul");


$coche->quitar_cadenas_nieve(4);


$coche->setColor("negro");


Vehiculo::ver_atributo($coche);

?>

