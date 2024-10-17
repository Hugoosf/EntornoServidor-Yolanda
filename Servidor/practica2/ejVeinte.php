<?php

$estadios_futbol = [
    "Barcelona" => "Camp Nou",
    "Real Madrid" => "Santiago Bernabeu",
    "Valencia" => "Mestalla",
    "Real Sociedad" => "Anoeta"
];


echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Estadio</th></tr>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<tr><td>$equipo</td><td>$estadio</td></tr>";
}
echo "</table>";


unset($estadios_futbol["Real Madrid"]);


echo "<ol>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<li>$equipo: $estadio</li>";
}
echo "</ol>";
?>
