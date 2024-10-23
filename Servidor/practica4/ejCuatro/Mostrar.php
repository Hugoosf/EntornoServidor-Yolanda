<?php



include_once 'Coche.php';
include_once 'Dos_ruedas.php';
include_once 'Camion.php';


$coche = new Coche("verde", 1400);
$coche->anadir_persona(65);
$coche->anadir_persona(65);
echo "El color del coche es: " . $coche->getColor() . "<br>";
echo "El nuevo peso del coche es: " . $coche->getPeso() . "<br>";


$coche->repintar("rojo");
$coche->anadir_cadenas_nieve(2);
echo "El color del coche es: " . $coche->getColor() . "<br>";
echo "El número de cadenas para la nieve del coche es: " . $coche->numero_cadenas_nieve . "<br>";


$dos_ruedas = new Dos_ruedas("negro", 120);
$dos_ruedas->anadir_persona(80);
$dos_ruedas->poner_gasolina(20);
echo "El color del dos ruedas es: " . $dos_ruedas->getColor() . "<br>";
echo "El peso del dos ruedas es: " . $dos_ruedas->getPeso() . "<br>";


$camion = new Camion("azul", 10000);
$camion->longitud = 10;
$camion->numero_puertas = 2;
$camion->anadir_remolque(5);
$camion->anadir_persona(80);
echo "El color del camión es: " . $camion->getColor() . "<br>";
echo "El peso del camión es: " . $camion->getPeso() . "<br>";
echo "La longitud del camión es: " . $camion->longitud . "<br>";
echo "El número de puertas del camión es: " . $camion->numero_puertas . "<br>";

?>