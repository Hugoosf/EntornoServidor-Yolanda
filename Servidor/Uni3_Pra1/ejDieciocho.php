<?php

$animales = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$edades = ["12", "34", "45", "52", "12"];
$arboles = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];


$mergedArrayPush = [];


foreach ($animales as $animal) {
    array_push($mergedArrayPush, $animal);
}
foreach ($edades as $edad) {
    array_push($mergedArrayPush, $edad);
}
foreach ($arboles as $arbol) {
    array_push($mergedArrayPush, $arbol);
}


echo "<pre>";
print_r($mergedArrayPush);
echo "</pre>";
?>
