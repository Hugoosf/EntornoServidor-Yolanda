<?php

$peliculasPorMes = [
    "enero" => 9,
    "febrero" => 12,
    "marzo" => 0,
    "abril" => 17
];


foreach ($peliculasPorMes as $mes => $cantidad) {
    if ($cantidad > 0) {
        echo "En $mes se han visto $cantidad películas.<br>";
    }
}
?>
