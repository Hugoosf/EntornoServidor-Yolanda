<?php

/*

En este código se crean 2 variables, una que almacena un email y otra que almacena un mensaje que dependerá de la variable email. Para que esto sea así, se crea un condicional que primeramente evalúa si la variable email está vacía y, si esto es así, modificará la segunda variable para que nos diga que se requiere un email. La otra opción que podría ocurrir es que el formato de la cadena no sea una dirección de correo electrónico válida, para poder validar esto se utiliza la función filter_var, cuyos parámetros serían primeramente el email a validar seguido del filtro específico FILTER_VALIDATE_EMAIL, que verifica si el formato de la cadena es una dirección de correo electrónico válida y de no ser así se modifica la variable $emailErr para que nos lo notifique.

*/

$email="abc@abc.com";
$emailErr="Email correcto";
if (empty($email)) {
 $emailErr = "Se requiere Email";
 } else {
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Fomato de Email invalido";
 }
 }
echo $email;
echo "<br>";
echo $emailErr;
?>

