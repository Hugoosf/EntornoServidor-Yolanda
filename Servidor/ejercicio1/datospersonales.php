<?php
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
}

?>