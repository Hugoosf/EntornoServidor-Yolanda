<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_decimal = $_SESSION['numero_decimal']; 

    if ($_POST['numerin'] == $numero_decimal) {
        echo "Respuesta acertada, el número es " . $numero_decimal . "<br><br>";
    } else {
        echo "Has fallado, vuelve a jugar<br><br>";
    }
    echo '<a href="ejercicio2.php">VOLVER A JUGAR</a>';
} else {
    header("Location: ejercicio2.php");
    exit();
}
?>
