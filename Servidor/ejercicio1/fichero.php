<?php

if(isset($_POST['nombre'])){
    echo "Nombre: " . $_POST['nombre'];
    echo "Apellido: " . $_POST['apellido'];
    

    


}else{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Datos</title>
    </head>
    <body>
        <h1>Introducir Datos Personales</h1>
        <form action="#" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br><br>
            
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>

    <?php


}


?>