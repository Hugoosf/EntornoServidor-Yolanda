<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario Dinámico</title>
    <style>
        table { border-collapse: collapse; }
        th, td { padding: 8px; text-align: center; }
        th { background-color: blue; color: white; }
        td { border: 1px solid #000; }
    </style>
</head>
<body>

<form method="post">
    Introduce un mes: <input type="number" name="mes" min="1" max="12" required>
    Introduce un año: <input type="number" name="año" min="1" required>
    <input type="submit" name="enviar" value="Enviar">
</form>

<?php
if (isset($_POST['enviar'])) {
    $mes = $_POST['mes'];
    $año = $_POST['año'];

 
    $primerDiaSemana = date("N", mktime(0, 0, 0, $mes, 1, $año)); 
    $diasMes = date("t", mktime(0, 0, 0, $mes, 1, $año)); 

    echo "<h2>Calendario $año</h2>";
    echo "<table>";
    echo "<tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr><tr>";


    for ($i = 1; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }

    
    for ($dia = 1; $dia <= $diasMes; $dia++) {
        echo "<td>$dia</td>";
        
        if (($dia + $primerDiaSemana - 1) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    
    while (($dia + $primerDiaSemana - 1) % 7 != 1) {
        echo "<td></td>";
        $dia++;
    }

    echo "</tr></table>";
}
?>

</body>
</html>
