<?php

$animales = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$edades = ["12", "34", "45", "52", "12"];
$arboles = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];


$mergedArray = array_merge($animales, $edades, $arboles);


echo "<pre>";
print_r($mergedArray);
echo "</pre>";
?>
