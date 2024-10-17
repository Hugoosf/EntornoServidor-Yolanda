<?php

$array = array(5 => 1, 12 => 2, 13 => 56, 'x' => 42);


echo "<pre>";
print_r($array);
echo "</pre>";


echo "Número de elementos: " . count($array) . "<br>";


unset($array[5]);


echo "<pre>";
print_r($array);
echo "</pre>";


$array = null;
?>
