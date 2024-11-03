<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $suma = $_POST['a'] + $_POST['b'];
    echo "La suma de " . $_POST['a']  ." + ". $_POST['b'] . " es ".$suma;
}




?>