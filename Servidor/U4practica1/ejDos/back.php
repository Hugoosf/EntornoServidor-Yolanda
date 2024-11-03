<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $option = $_POST['option'] ?? null;


    switch($option) {
        case 'personita':
            echo "<p>Menos de 14 años : eres una personita</p>";
        break;

        case 'muyjoven':
            echo "<p>Entre 15 y 20 años: todavía eres muy joven</p>";
        break;

        case 'joven':
            echo "<p>De 21 a 40 años: eres una persona joven</p>";
        break;

        case 'madura':
            echo "<p>Entre 41 y 60 años: eres una persona madura</p>";
        break;

        case 'mayor':
            echo "<p>Más de 60 años: Ya eres una persona mayor</p>";
        break;

        default:
            echo "<p>Aún no me has dicho tu edad</p>";
        break;


         
    }


}





?>