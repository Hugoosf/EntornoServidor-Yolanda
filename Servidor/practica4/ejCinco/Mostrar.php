<?php

include_once 'Coche.php';
include_once 'Dos_ruedas.php';
include_once 'Camion.php';


$dos_ruedas = new Dos_ruedas("rojo", 150);


$dos_ruedas->anadir_persona(70);
echo "El peso de dos ruedas es: " . $dos_ruedas->peso . "<br>"; 


$dos_ruedas->repintar("verde");
$dos_ruedas->cilindrada = 1000;


Vehiculo::ver_atributo($dos_ruedas);


$camion = new Camion("blanco", 6000);


$camion->anadir_persona(84);


$camion->repintar("azul");
$camion->numero_puertas = 2;


Vehiculo::ver_atributo($camion);

?>
