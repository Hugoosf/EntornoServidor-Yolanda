<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Sencillo</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $suma = 0;
    for ($i = 1; $i <= 9; $i++) {
        if (isset($_POST["bloque$i"])) {
            $suma += (float)$_POST["bloque$i"]; 
        }
    }
    echo "<h2>La suma es: $suma</h2>";
}else{
?>

<form action="#" method="post">
    <?php
    
    for ($i = 1; $i <= 9; $i++) {
        echo "<label for='bloque$i'>" . ($i - 1) . "</label>";
        echo "<input type='text' id='bloque$i' name='bloque$i' required>";
        echo "<br>";
    }
    ?>
    <button type="submit">Enviar</button>
</form>

</body>
</html>

<?php


}


?>
