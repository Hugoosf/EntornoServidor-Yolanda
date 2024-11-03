<?php

function funcion_validar_url($valor) {
    if (filter_var($valor, FILTER_VALIDATE_URL)) {
        $urlErr = "Formato de URL válido";
    } else {
        $urlErr = "Formato de URL inválido";
    }
    return $urlErr;
}

$url1 = "http://www.ejemplo.com"; 
echo funcion_validar_url($url1) . "<br>";

$url2 = "htp://ejemplo.com"; 
echo funcion_validar_url($url2) . "<br>";

$url3 = "ejemplo.com"; 
echo funcion_validar_url($url3) . "<br>";

$url4 = "http://ejemplo"; 
echo funcion_validar_url($url4);
?>


