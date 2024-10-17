<?php

function custom_isset($var) {
    return isset($var);
}


function custom_is_null($var) {
    return is_null($var);
}


function custom_empty($var) {
    return empty($var);
}


function custom_strlen($cad) {
    return strlen($cad);
}


function custom_explode($cad, $token) {
    return explode($token, $cad);
}


function custom_implode($token, $array) {
    return implode($token, $array);
}


function custom_count($arr) {
    return count($arr);
}


function custom_array_values($arr) {
    return array_values($arr);
}


function custom_array_keys($arr) {
    return array_keys($arr);
}


// Ejemplo de uso
$cadena = "Hola mundo";
$array = ["a" => 1, "b" => 2, "c" => 3];
$var = null;

echo "Probar funciones:<br><br>";

// isset()
echo "isset(var): " . (custom_isset($var) ? 'true' : 'false') . "<br>";
echo "isset(1): " . (custom_isset(1) ? 'true' : 'false') . "<br><br>";

// is_null()
echo "is_null(var): " . (custom_is_null($var) ? 'true' : 'false') . "<br>";
echo "is_null(1): " . (custom_is_null(1) ? 'true' : 'false') . "<br><br>";

// empty()
echo "empty(var): " . (custom_empty($var) ? 'true' : 'false') . "<br>";
echo "empty(''): " . (custom_empty('') ? 'true' : 'false') . "<br><br>";

// strlen()
echo "strlen(cadena): " . custom_strlen($cadena) . "<br><br>";

// explode()
$frase = "PHP es genial";
$tokens = custom_explode($frase, " ");
echo "explode(frase, ' '): ";
print_r($tokens);
echo "<br><br>";

// implode()
$fraseReensamblada = custom_implode(" ", $tokens);
echo "implode(' ', tokens): $fraseReensamblada<br><br>";

// count()
echo "count(array): " . custom_count($array) . "<br><br>";

// array_values()
$valores = custom_array_values($array);
echo "array_values(array): ";
print_r($valores);
echo "<br><br>";

// array_keys()
$claves = custom_array_keys($array);
echo "array_keys(array): ";
print_r($claves);
echo "<br><br>";
?>
