<?php

$familias = array(
    "Los Simpson" => array(
        "padre" => "Homer",
        "madre" => "Marge",
        "hijos" => array("Bart", "Lisa", "Maggie")
    ),
    "Los Griffin" => array(
        "padre" => "Peter",
        "madre" => "Lois",
        "hijos" => array("Chris", "Meg", "Stewie")
    )
);


echo "<ul>";
foreach ($familias as $familia => $miembros) {
    echo "<li>$familia:</li>";
    echo "<ul>";
    echo "<li>Padre: " . $miembros['padre'] . "</li>";
    echo "<li>Madre: " . $miembros['madre'] . "</li>";
    echo "<li>Hijos: " . implode(", ", $miembros['hijos']) . "</li>";
    echo "</ul>";
}
echo "</ul>";
?>
