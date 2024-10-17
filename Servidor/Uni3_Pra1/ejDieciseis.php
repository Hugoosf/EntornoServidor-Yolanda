<?php

$lenguajes_cliente = [
    "PHP" => "PHP",
    "JS" => "JavaScript",
    "HTML" => "HTML"
];

$lenguajes_servidor = [
    "Python" => "Python",
    "Ruby" => "Ruby",
    "Java" => "Java"
];


$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);


echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Lenguaje</th></tr>";
foreach ($lenguajes as $indice => $lenguaje) {
    echo "<tr><td>$indice</td><td>$lenguaje</td></tr>";
}
echo "</table>";
?>
