<?php
session_start();

if (isset($_POST['enviar'])) {
    $numero_decimal = $_SESSION['numero_decimal'];

    if ($_POST['numerin'] == $numero_decimal) {
        echo "Respuesta acertada, el número es " . $numero_decimal . "<br><br>";
    } else {
        echo "Has fallado, vuelve a jugar<br><br>";
    }
    echo '<a href="ejercicio2.php">VOLVER A JUGAR</a>';
} else {
    $numeros = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];
    echo "<h1>Adivina el número en decimal</h1>";

    
    $num_binario = $numeros[0] . $numeros[1] . $numeros[2] . $numeros[3];

    
    $numero_decimal = bindec($num_binario);
    $_SESSION['numero_decimal'] = $numero_decimal;

    echo "<h2>El número en BINARIO: $num_binario</h2>";

   
    for ($i = 0; $i < 4; $i++) {
        switch ($numeros[$i]) {
            case 0:
                echo "<img src='../img/blanco.JPG'>";
                break;
            case 1:
                switch ($i) {
                    case 0:
                        echo "<img src='../img/ocho.JPG'>";
                        break;
                    case 1:
                        echo "<img src='../img/cuatro.JPG'>";
                        break;
                    case 2:
                        echo "<img src='../img/dos.JPG'>";
                        break;
                    case 3:
                        echo "<img src='../img/uno.JPG'>";
                        break;
                }
                break;
        }
    }

    
    echo '<form action="ejercicio21.php" method="post">';
    echo "<label for='numerin'>Número decimal</label>";
    echo "<input type='text' name='numerin' id='numerin'>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo '</form>';
}
?>
