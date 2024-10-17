<?php

$deportes = array("futbol", "baloncesto", "natación", "tenis");


echo "<ul>";
for ($i = 0; $i < count($deportes); $i++) {
    echo "<li>$deportes[$i]</li>";
}
echo "</ul>";


echo "Total de valores: " . count($deportes) . "<br>";


reset($deportes);
echo "Valor en la primera posición: " . current($deportes) . "<br>";


next($deportes);
echo "Valor después de avanzar una posición: " . current($deportes) . "<br>";


end($deportes);
echo "Valor en la última posición: " . current($deportes) . "<br>";


prev($deportes);
echo "Valor después de retroceder una posición: " . current($deportes) . "<br>";
?>
