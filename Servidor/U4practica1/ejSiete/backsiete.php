<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$resultado = "";


if (isset($_POST['enviar'])) {
    $resultado = "El vector tiene " . $_POST['ele'] . " elementos<br>";
    $suma = 0;
    for ($j = 1; $j <= $_POST['ele']; $j++) {
        $resultado .= "$j = " . $_POST[$j] . "<br>";
        $suma += $_POST[$j];
    }
    $resultado .= "La suma es $suma<br><br>";
} elseif (isset($_POST['resultado_guardado'])) {
    
    $resultado = $_POST['resultado_guardado'];
}


if (!empty($resultado)) {
    echo $resultado;
    echo '</div>';
}



if(isset($_POST['enviar'])) {
    echo '<form action="#" method="post">';
    echo '<label for="ele">Numero de Elementos: </label>';
    echo '<input type="text" name="ele" id="ele" value=" '. $_POST['ele'] . '">';
    echo '<button type="submit" name="aceptar">Aceptar</button>';
    
    
    echo '<input type="hidden" name="resultado_guardado" value="' . htmlspecialchars($resultado) . '">';
    echo '</form><br><br><br>';



}else{



echo '<form action="#" method="post">';
echo '<label for="ele">Numero de Elementos: </label>';
echo '<input type="text" name="ele" id="ele">';
echo '<button type="submit" name="aceptar">Aceptar</button>';


echo '<input type="hidden" name="resultado_guardado" value="' . htmlspecialchars($resultado) . '">';
echo '</form><br><br><br>';

}


if(isset($_POST['enviar'])){
    echo '<form action="#" method="post">';
for ($j = 1; $j <= $_POST['ele']; $j++) {
        echo "<label for='$j'>$j:</label>";
        echo "<input type='text' name='$j' id='$j' value=". $_POST[$j] ."><br>";
    }
    echo "<input type='hidden' name='ele' value='" . $_POST['ele'] . "'>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo '</form>';

}


if (isset($_POST['aceptar'])) {
    echo '<form action="#" method="post">';
    for ($i = 1; $i <= $_POST['ele']; $i++) {
        echo "<label for='$i'>$i:</label>";
        echo "<input type='text' name='$i' id='$i'><br>";
    }
    echo "<input type='hidden' name='ele' value='" . $_POST['ele'] . "'>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo '</form>';
}

?>

</body>
</html>

