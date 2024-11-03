<?php

function  funcion_validar_email($valor) {
    if (filter_var($valor, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Formato de Email válido";
        
    }else{
        $emailErr = "Formato de Email inválido";
    }
    return $emailErr;
    }


    $email="abc@abc.com";

   

    echo funcion_validar_email($email) . "<br>";


    $email="abcabc.com";

   

    echo funcion_validar_email($email);
   




?>