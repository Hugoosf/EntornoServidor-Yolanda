<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $suma = $_POST['primero'] + $_POST['segundo'];
    
    echo "La suma de " . $_POST['primero']  ." y ". $_POST['segundo'] . " es ".$suma;
} else{
?>  
<form action="#" method="post">

<label for="primero">A:</label>
<input type="number" id="primero" name="primero" required>

<label for="segundo">B:</label>
<input type="number" id="segundo" name="segundo" required>
<button type="submit">Enviar</button>
</form>
<?php


}
?>
</body>
</html>

